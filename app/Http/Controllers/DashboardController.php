<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class DashboardController extends Controller
{
    public function index()
    {

        SEOMeta::setTitle(null);
        SEOMeta::setDescription('starwhisper is a clothing store that provides mens clothing that can be used by women too. The advantages of Starwhisper are that it uses the best cotton, has its own brand name, and has a very luxurious and elegant design.');

        OpenGraph::setDescription('starwhisper is a clothing store that provides mens clothing that can be used by women too. The advantages of Starwhisper are that it uses the best cotton, has its own brand name, and has a very luxurious and elegant design.');
        OpenGraph::setTitle('starwhisper.');
        OpenGraph::setUrl('https://starwhisper.id');
        OpenGraph::addProperty('type', 'articles', 'official');

        TwitterCard::setTitle('starwhisper.');
        TwitterCard::setSite('https://starwhisper.id');

        JsonLd::setTitle('starwhisper.');
        JsonLd::setDescription('starwhisper is a clothing store that provides mens clothing that can be used by women too. The advantages of Starwhisper are that it uses the best cotton, has its own brand name, and has a very luxurious and elegant design.');
        JsonLd::addImage('https://res.cloudinary.com/starwhisper/image/upload/v1565405773/web/navbarlogo_s1re4h.png');
        return view('home.index');
    }
    public function ernodata()
    {
        return view('home.404');
    }
    public function email()
    {
        return view('email.index');
    }
    public function sendEmail(Request $request)
    {
        $subject = "Pesan baru dari " . $request->input('name');
        $name = $request->input('name');
        $emailadd = $request->input('email');
        $subject = $request->input('subject');
        $messages = $request->input('messages');

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'mail.widyatechnoabadi.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'it@widyatechnoabadi.com';
            $mail->Password = 'LibrA21101998';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 465;

            // Siapa yg mengirim email
            $mail->setFrom($emailadd, $name);

            // Siapa yang akan menerima email
            $mail->addAddress('it@widyatechnoabadi.com', 'IT DEPARTEMENT WIDYATECHNOABADI');

            // Ke siapa kita akan balas emailnya
            $mail->addReplyTo($emailadd, $name);

            // Contentnnya
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $messages;
            $mail->AltBody = $messages;

            $mail->send();

            $request->session()->flash('sukses', 'Thank you for sending us an email');
            return redirect('/contact');
        } catch (Exception $e) {
            echo 'Message could not be sent';
            echo 'Mail error: ' . $mail->ErrorInfo;
        }
    }
}
