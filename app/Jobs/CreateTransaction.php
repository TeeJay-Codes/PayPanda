<?php

namespace App\Jobs;

use App\Http\Requests\CreateTransactionRequest;
use App\Jobs\Job;
use App\Transaction;
use App\User;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateTransaction extends Job implements SelfHandling
{
    protected $request;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(CreateTransactionRequest $request)
    {
        $this->request = $request;

        $this->user = \Auth::user();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CreateTransaction $command)
    {
        $beneficiary = User::where('username', $command->request->get('beneficiary'))->first();

        $transaction = $this->user->transactions()->create([
            'beneficiary_id' => $beneficiary->id,
            'amount'         => $command->request->get('amount'),
            'details'        => $command->request->get('details'),
            'ref'            => $command->request->get('ref'),
            'status'         => 'pending'
        ]);

        $mail_user = $transactions->beneficiary_id;
        $beneficiary_user = App\User::get($mail_user);
        $this->mail->send('emails.welcome', ['name' => $data['username']], function ($message) use ($beneficiary_user)
        {
            $message->from( getenv('SENDER_ADDRESS'), getenv('PayPanda'));
            $message->to($beneficiary_user->email)->subject('Welcome to PayPanda');
        });

    }
}
