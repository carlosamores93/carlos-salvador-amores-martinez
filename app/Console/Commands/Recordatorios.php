<?php

namespace App\Console\Commands;

use App\Notice;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Recordatorios extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Recordatorios a mi correo';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $notices = Notice::where('status', 1)->get();
        foreach ($notices as $key => $notice) {
            if (Carbon::parse($notice->date)->month == Carbon::today()->month && Carbon::parse($notice->date)->day == Carbon::today()->day) {
                if ($notice->repeat == 0) {
                    $this->enviarCorreoRecordatorio($notice->subject . ' de ' . $notice->name, $notice->message);
                    $notice->status = 0;
                    $notice->save();
                    $notice->delete();
                }else{
                    $edad =  (int)Carbon::today()->year - (int)Carbon::parse($notice->date)->year;
                    $subject = $notice->subject . ' de ' . $notice->name;
                    $mensaje = $notice->message . '<p>' . $notice->name . ' cumple <b>' . $edad . '</b> años.</p>';
                    $this->enviarCorreoRecordatorio($subject, $mensaje);
                }
            }
            // En una semana
            if (Carbon::parse($notice->date)->month == Carbon::today()->addDays(7)->month && Carbon::parse($notice->date)->day == Carbon::today()->addDays(7)->day) {
                if ($notice->repeat == 0) {
                    $this->enviarCorreoRecordatorio($notice->subject . ' de ' . $notice->name, $notice->message . ' en una semana');
                }else{
                    $edad =  (int)Carbon::today()->year - (int)Carbon::parse($notice->date)->year;
                    $subject = $notice->subject . ' de ' . $notice->name;
                    $mensaje = $notice->message . '<p>' . $notice->name . ' cumplirá <b>' . $edad . '</b> años en una semana</p>';
                    $this->enviarCorreoRecordatorio($subject, $mensaje);
                }
            }
            // Al dia siguiente
            if (Carbon::parse($notice->date)->month == Carbon::today()->addDays(1)->month && Carbon::parse($notice->date)->day == Carbon::today()->addDays(1)->day) {
                if ($notice->repeat == 0) {
                    $this->enviarCorreoRecordatorio($notice->subject . ' de ' . $notice->name, $notice->message . ' mañana.');
                }else{
                    $edad =  (int)Carbon::today()->year - (int)Carbon::parse($notice->date)->year;
                    $subject = $notice->subject . ' de ' . $notice->name;
                    $mensaje = $notice->message . '<p>' . $notice->name . ' cumplirá <b>' . $edad . '</b> años MAÑANA</p>';
                    $this->enviarCorreoRecordatorio($subject, $mensaje);
                }
            }

        }


    }

    private function enviarCorreoRecordatorio($asunto, $mensaje){
        mail('carlos.amores@iahorro.com', $asunto, $mensaje);
        mail('amorescarlos93@hotmail.com', $asunto, $mensaje);
    }



    function test(){
        $carlos = array('Y' => 1993, 'M' => 3, 'D' => 1);
        $msg = $this->recordarCumpleaños('Carlos Amores', $carlos);
        $this->enviarCorreo($msg);
        $maria = array('Y' => 1992, 'M' => 3, 'D' => 14);
        $msg = $this->recordarCumpleaños('Maria B', $maria);
        $this->enviarCorreo($msg);
        $dogor = array('Y' => 1991, 'M' => 12, 'D' => 18);
        $msg = $this->recordarCumpleaños('Diego Duque, alias Lucho', $dogor);
        $this->enviarCorreo($msg);
        $patricio = array('Y' => 1994, 'M' => 11, 'D' => 3);
        $msg = $this->recordarCumpleaños('Patricio Amores', $patricio);
        $this->enviarCorreo($msg);
        $camila = array('Y' => 2016, 'M' => 12, 'D' => 17);
        $msg = $this->recordarCumpleaños('Camila Leonor Amores Obando', $camila);
        $this->enviarCorreo($msg);
        $jessica = array('Y' => 1995, 'M' => 6, 'D' => 15);
        $msg = $this->recordarCumpleaños('Jessica Obando', $jessica);
        $this->enviarCorreo($msg);
        $moises = array('Y' => 1975, 'M' => 9, 'D' => 24);
        $msg = $this->recordarCumpleaños('Moises Amores', $moises);
        $this->enviarCorreo($msg);
        $pili = array('Y' => 2006, 'M' => 9, 'D' => 19);
        $msg = $this->recordarCumpleaños('Priscila Anahí Amores Barahona', $pili);
        $this->enviarCorreo($msg);
        $don_manuel = array('Y' => 1900, 'M' => 9, 'D' => 22);
        $msg = $this->recordarCumpleaños('Don Manuel', $don_manuel);
        $this->enviarCorreo($msg);
        $wera = array('Y' => 1990, 'M' => 10, 'D' => 5);
        $msg = $this->recordarCumpleaños('Lorena Miranda', $wera);
        $this->enviarCorreo($msg);
        $oscar = array('Y' => 2005, 'M' => 12, 'D' => 9);
        $msg = $this->recordarCumpleaños('Oscar Alejandro Naranjo Amores', $oscar);
        $this->enviarCorreo($msg);
        $miguel_angel = array('Y' => 2001, 'M' => 12, 'D' => 28);
        $msg = $this->recordarCumpleaños('Miguel Angel', $miguel_angel);
        $this->enviarCorreo($msg);
        $tia_amada = array('Y' => 1972, 'M' => 12, 'D' => 26);
        $msg = $this->recordarCumpleaños('Amada Leonor Amores Neto', $tia_amada);
        $this->enviarCorreo($msg);
        $ahinoga = array('Y' => 2018, 'M' => 9, 'D' => 9);
        $msg = $this->recordarCumpleaños('Ahinoa Valentina Amores Cuje', $ahinoga);
        $this->enviarCorreo($msg);
        $pillin_willi = array('Y' => 1999, 'M' => 1, 'D' => 13);
        $msg = $this->recordarCumpleaños('Pillin William', $pillin_willi);
        $this->enviarCorreo($msg);
        $jenny = array('Y' => 1993, 'M' => 1, 'D' => 22);
        $msg = $this->recordarCumpleaños('Jenny, ñaña Victor', $jenny);
        $this->enviarCorreo($msg);
        $andrea = array('Y' => 2005, 'M' => 5, 'D' => 10);
        $msg = $this->recordarCumpleaños('Andrea Amores', $andrea);
        $this->enviarCorreo($msg);
        $eulalia = array('Y' => 1979, 'M' => 6, 'D' => 2);
        $msg = $this->recordarCumpleaños('Eulalia Amores', $eulalia);
        $this->enviarCorreo($msg);
        $mama = array('Y' => 1970, 'M' => 7, 'D' => 3);
        $msg = $this->recordarCumpleaños('Mamaaaaaaaaaaaa', $mama);
        $this->enviarCorreo($msg);
        $leonor = array('Y' => 1939, 'M' => 7, 'D' => 31);
        $msg = $this->recordarCumpleaños('Abuelita Leonor', $leonor);
        $this->enviarCorreo($msg);
        $marcelo = array('Y' => 1974, 'M' => 9, 'D' => 1);
        $msg = $this->recordarCumpleaños('Abuelita Leonor', $marcelo);
        $this->enviarCorreo($msg);
        $papa = array('Y' => 1967, 'M' => 8, 'D' => 2);
        $msg = $this->recordarCumpleaños('Papaaaaaaa', $papa);
        $this->enviarCorreo($msg);
    $vod = array('Y' => 2019, 'M' => 2, 'D' => 1);
        $msg = $this->recordarCumpleaños('VODAFONE FIN CONTRATO 8 FEBRERO 2020', $vod);
        $this->enviarCorreo($msg);
    $vod = array('Y' => 2019, 'M' => 2, 'D' => 5);
        $msg = $this->recordarCumpleaños('VODAFONE FIN CONTRATO 8 FEBRERO 2020', $vod);
        $this->enviarCorreo($msg);
    $vod = array('Y' => 2019, 'M' => 2, 'D' => 8);
        $msg = $this->recordarCumpleaños('VODAFONE FIN CONTRATO 8 FEBRERO 2020', $vod);
        $this->enviarCorreo($msg);
    }



}
