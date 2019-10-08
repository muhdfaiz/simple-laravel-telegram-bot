<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendMessageToTelegram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a message to telegram channel';

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
        $title = 'LTAT sends signal of lower dividends ahead ';
        $headline = 'LAST week, Lembaga Tabung Angkatan Tentera (LTAT) sent a signal to its members — the good old days of high dividend returns are now behind them. 
            That is the underlying takeaway from a surprise statement on Sept 26 that revealed seven major financial irregularities, which were unearthed via a special
            investigative audit that began in February.';
        $date = '15 minutes ago';
        $articleURL = 'https://google.com.my';

        $text = '<b>The Star News</b>'  . "\n\n" .
            '<b>Title:</b> <b>' . $title . "</b>\n\n" .
            '<b>Headline:</b> ' . $headline . "\n\n" .
            '<b>Date:</b> ' . $date . "\n\n" .
            '<b>URL:</b> ' . $articleURL . "\n\n";

        Telegram::sendMessage([
            'chat_id' => '-1001170656540',
            'parse_mode' => 'HTML',
            'text' => $text
        ]);
    }
}
