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
    protected $signature = 'command:notices';

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
                } else {
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
                } else {
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
                } else {
                    $edad =  (int)Carbon::today()->year - (int)Carbon::parse($notice->date)->year;
                    $subject = $notice->subject . ' de ' . $notice->name;
                    $mensaje = $notice->message . '<p>' . $notice->name . ' cumplirá <b>' . $edad . '</b> años MAÑANA</p>';
                    $this->enviarCorreoRecordatorio($subject, $mensaje);
                }
            }
        }
    }

    private function enviarCorreoRecordatorio($asunto, $mensaje)
    {
        mail('amorescarlos93@hotmail.com', $asunto, $mensaje);
    }
}
