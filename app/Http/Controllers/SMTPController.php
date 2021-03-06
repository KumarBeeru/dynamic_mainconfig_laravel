<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use App\Http\Requests\SmtpConfigRequest;
use App\Models\Smtp;
use App\Notifications\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;


class SMTPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $keys =  array(
            "site_name" => "APP_NAME",
            "smtp_driver" => "MAIL_DRIVER",
            "smtp_host" => "MAIL_HOST",
            "smtp_port" => "MAIL_PORT",
            "username" => "MAIL_USERNAME",
            "password" => "MAIL_PASSWORD",
            "from_name"  => "MAIL_FROM_NAME",
            "encription" => "MAIL_ENCRYPTION",
            "from_mail" => "MAIL_FROM_ADDRESS"
        );
        $config = Smtp::orderBy('id', 'DESC')
            ->select("site_name", "smtp_driver", "smtp_host", "smtp_port", "username", "password", "from_name", "encription", "from_mail")
            ->first()->toArray();


        foreach ($config as $key => $value){


            $env_key = $keys[$key];
            $from = $env_key.'=';
            $to = $env_key.'=';

            if($env_key == "MAIL_FROM_NAME"){

                $to = $to. "\"".$value."\"";
                $from = $from.(env($env_key) ? "\"".env($env_key)."\"" : env($env_key));

            }else{

                $to = $to.trim($value);
                $from = $from.env($env_key);
            }

            if($to != $from){

                $this->configEnv($to, $from);
            }
        }

        Artisan::call("config:clear");
        return view("send");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function send(SendMailRequest $request){

        try{

            $data = $request->only(array("to_mail", "subject", "content"));
            Notification::route("mail", $data["to_mail"])
                ->notify(new SendMail($data));

            return redirect()->back()->with("success", "Mail has been sent");
        }catch (\Exception $e){

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("smtp");
    }

    /**
     * Store smtp configuration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SmtpConfigRequest $request)
    {

        try{

            $data = $request->only(array("site_name", "smtp_driver", "smtp_host", "smtp_port", "username", "password", "from_name", "encription", "from_mail"));
            Smtp::create($data);
            return redirect()->back()->with("success", "Configuration Stored Successfully");
        }catch (\Exception $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }
    }


    /**
     * @param $to
     * @param $from
     */
    protected function configEnv($to, $from){

        
        $path = base_path('.env');

        //Log::info($from ." => ". $to);
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $from, $to, file_get_contents($path)
            ));
        }
    }

}
