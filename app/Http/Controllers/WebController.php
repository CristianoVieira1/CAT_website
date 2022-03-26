<?php

namespace App\Http\Controllers;

use App\Bacharelado;
use App\Curso;
use App\Educacao;
use App\Extencao;
use App\Licenciatura;
use App\Mail\Contact;
use App\Mail\FacuContact;
use App\Mail\FacuMatricula;
use App\PremioCat;
use App\Service;
use App\Support\Cropper;
use App\Tecnologia;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Curso::orderBy('created_at', 'DESC')->limit(3)->get();
        $servis = Service::orderBy('created_at', 'DESC')->limit(3)->get();

       $head =  $this->seo->render(env('APP_NAME') . ' - Centro de Aperfeiçoamento Tecnológico',
           'A empresa que há mais de 10 anos forma os melhores profissionais para serviços das maiores empresas de telecomunicação do país, a disposição da sua empresa / indústria / condomínio para cuidar de toda a infra estrutura.'
           , url('/'),
           asset('cursos/assets/images/home.png'));
        return view('cursos.home', [
            'head' => $head,
            'posts' => $posts,
            'servis' => $servis,
        ]);
    }

    public function cursosHome()
    {
        $posts = Curso::orderBy('created_at', 'DESC')->limit(3)->get();

       $head =  $this->seo->render(env('APP_NAME') . ' - Centro de Aperfeiçoamento Tecnológico',
           'A empresa que há mais de 10 anos forma os melhores profissionais para serviços das maiores empresas de telecomunicação do país, a disposição da sua empresa / indústria / condomínio para cuidar de toda a infra estrutura.'
           , url('cursosHome'),
           asset('cursos/assets/images/home.png'));
        return view('cursos.home', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function about()
    {
        $head =  $this->seo->render(env('APP_NAME') . ' - Sobre Nós',
            'Fundado para preparar profissionais qualificados para as mais diversas áreas em segurança no trabalho, telecomunicações, eletricidade e informática especializada, o CAT vem ao longo dos anos se destacando na excelência de resultados proporcionados às empresas e aos profissionais que confiam sua formação ao CAT. A medida fundamental para criação de nossa empresa fora a falta de profissionais capacitados que o setor de telecomunicações enfrentava em um momento de expansão da operação de telefonia fixa, com a popularização do acesso a internet banda larga no país. Com isso, passamos a treinar profissionais das áreas técnicas de atendimento e suporte a clientes.'
            , route('about'),
            asset('cursos/assets/images/about.png'));
        return view('cursos.about', [
            'head' => $head
        ]);
    }

    public function awards()
    {

        $premias = PremioCat::orderBy('created_at', 'DESC')->get();

        $head =  $this->seo->render(env('APP_NAME') . ' - Premiações',
            'Nosso trabalho sério, o respeito aos nossos alunos e clientes, atendimento personalizado, entrega de resultados comprovados, envolvimento de toda equipe em busca de surpreender positivamente a todos os que confiam a nós, sua formação ou de suas equipes, seus serviços e a instalação e manutenção de sua infraestrutura, contribuíram para garantir resultados como os prêmios que permearam nossa história até aqui.'
            , route('awards'),
            asset('images/awards.png'));
        return view('cursos.awards', [
            'head' => $head,
            'premias' => $premias
        ]);
    }

    public function course()
    {
        $posts = Curso::orderBy('created_at', 'DESC')->get();

        $head =  $this->seo->render(env('APP_NAME') . ' - Treinamentos',
            'Sempre em busca de inovações na capacitação profissional, levando às salas de aula um treinamento personalizado e motivacional, o CAT, surpreende com sua qualidade em consultoria e desenvolvimento profissional. Quer se profissionalizar de verdade? Venha para o CAT!'
            , route('course'),
            asset('cursos/assets/images/trainings.png'));
        return view('cursos.course', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function service()
    {
        $servis = Service::orderBy('created_at', 'DESC')->get();

        $head =  $this->seo->render(env('APP_NAME') . ' - Serviços',
            'Serviços: não vá confiar a instalação e manutenção de sua residência, condomínio ou empresa, para qualquer um.'
            , route('service'),
            asset('cursos/assets/images/trainings.png'));
        return view('cursos.service', [
            'head' => $head,
            'servis' => $servis
        ]);
    }


    public function contact()
    {
        $head =  $this->seo->render(env('APP_NAME') . ' - Contato',
            'Se você deseja entrar em contato com o CAT, preencha o formulário abaixo. Você também pode ligar para um de nossos atendentes ou nos fazer uma visita. Nossos telefones, nosso email e nossa localização se encontram ao lado.'
            , route('contact'),
            asset('cursos/assets/images/contact.png'));
        return view('cursos.contact', [
            'head' => $head
        ]);
    }

    public function details($uri)
    {
        $post = Curso::where('uri', $uri)->first();
        $head =  $this->seo->render(env('APP_NAME') . ' - ' . $post->title,
            $post->title,
            route('details', $post->uri),
            Storage::url(Cropper::thumb($post->cover, 1200, 628)));
        return view('cursos.details', [
            'head' => $head,
            'post' => $post
        ]);
    }

    public function serviceDetails($uri)
    {
        $servi = Service::where('uri', $uri)->first();
        $head =  $this->seo->render(env('APP_NAME') . ' - ' . $servi->title,
            $servi->title,
            route('serviceDetails', $servi->uri),
            Storage::url(Cropper::thumb($servi->cover, 1200, 628)));
        return view('cursos.serviceDetails', [
            'head' => $head,
            'servi' => $servi
        ]);
    }


    public function sendEmail(Request $request)
    {


        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message

        ];

        Mail::send(new Contact($data));

        return redirect()->route('contact')
            ->with('mensagem', 'E-mail enviado com sucesso!');

    }



    // FACULDADE
    public function facuHome()
    {
        $bachas = Bacharelado::orderBy('created_at', 'DESC')->get();
        $licens = Licenciatura::orderBy('created_at', 'DESC')->get();
        $tecnos = Tecnologia::orderBy('created_at', 'DESC')->get();
        $educas = Educacao::orderBy('created_at', 'DESC')->get();
        $extens = Extencao::orderBy('created_at', 'DESC')->get();
        $head =  $this->seo->render(' EAD CAT - Unilins - Faculdade a Distância e Pós-graduação a Distância',
            'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
            , url('facuHome'),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuHome', [
            'head' => $head,
            'bachas' => $bachas,
            'licens' => $licens,
            'tecnos' => $tecnos,
            'educas' => $educas,
            'extens' => $extens
        ]);
    }

    public function facuGraduacao()
    {

        $bachas = Bacharelado::orderBy('created_at', 'DESC')->get();
        $licens = Licenciatura::orderBy('created_at', 'DESC')->get();
        $tecnos = Tecnologia::orderBy('created_at', 'DESC')->get();
        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
            'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
            , url('facuGraduacao'),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuGraduacao', [
            'head' => $head,
            'bachas' => $bachas,
            'licens' => $licens,
            'tecnos' => $tecnos,
        ]);
    }

    public function facuPleno()
    {
        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
            'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
            , url('facuPleno'),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuPleno', [
            'head' => $head
        ]);
    }

    public function facuDuvidas()
    {
        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
            'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
            , url('facuDuvidas'),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuDuvidas', [
            'head' => $head
        ]);
    }

    public function facuAbout()
    {
        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
            'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
            , url('facuAbout'),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuAbout', [
            'head' => $head
        ]);
    }

    public function facuBacha($uri)
    {
        $bacha = Bacharelado::where('uri', $uri)->first();

        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - ' . $bacha->titleSecond,
            $bacha->titleFirst,
             url('facuBachas', $bacha->uri),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuBacharelado', [
            'head' => $head,
            'bacha' => $bacha
        ]);

    }

    public function facuLicen($uri)
    {
        $licen = Licenciatura::where('uri', $uri)->first();

        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - ' . $licen->titleSecond,
            $licen->titleFirst,
            url('facuLicens', $licen->uri),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuLicenciatura', [
            'head' => $head,
            'licen' => $licen
        ]);

    }

    public function facuTecno($uri)
    {
        $tecno = Tecnologia::where('uri', $uri)->first();

        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - ' . $tecno->titleSecond,
            $tecno->titleFirst,
            url('facuTecnos', $tecno->uri),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuTecnologia', [
            'head' => $head,
            'tecno' => $tecno
        ]);

    }

    public function facuEduca($uri)
    {
        $educa = Educacao::where('uri', $uri)->first();

        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - ' . $educa->titleSecond,
            $educa->titleFirst,
            url('facuEducas', $educa->uri),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuEducacao', [
            'head' => $head,
            'educa' => $educa
        ]);

    }

    public function facuContact()
    {
        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Contato',
            'Se você deseja entrar em contato com o CAT, preencha o formulário abaixo. Você também pode ligar para um de nossos atendentes ou nos fazer uma visita. Nossos telefones, nosso email e nossa localização se encontram ao lado.'
            , route('facuContact'),
            asset('faculdade/assets/images/contact.png'));
        return view('faculdade.facuContact', [
            'head' => $head
        ]);
    }

    public function facuExtensCourse($uri)
    {
        $exten = Extencao::where('uri', $uri)->first();

        $head =  $this->seo->render(env('APP_NAME_FACU') . ' - ' . $exten->titleSecond,
            $exten->titleFirst,
            url('facuExtens', $exten->uri),
            asset('faculdade/assets/images/cover.png'));
        return view('faculdade.facuExtensaoCourse', [
            'head' => $head,
            'exten' => $exten
        ]);

    }

       public function facuExtencao()
   {

       $extens = Extencao::orderBy('created_at', 'DESC')->get();
       $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
           'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
           , url('facuExtencao'),
           asset('faculdade/images/cover.png'));
       return view('faculdade.facuExtencao', [
           'head' => $head,
           'extens' => $extens
       ]);
   }

   public function facuPosGraduacao()
   {
       $educas = Educacao::orderBy('created_at', 'DESC')->get();
       $head =  $this->seo->render(env('APP_NAME_FACU') . ' - Faculdade a Distância e Pós-graduação a Distância',
           'Estude na Instituição com a Metodologia mais completa. Livros impressos, vídeo aulas em DVD e online. Estudou? Passou e se formou! Saiba mais.'
           , url('facuPosGraduacao'),
           asset('faculdade/images/cover.png'));
       return view('faculdade.facuPosGraduacao', [
           'head' => $head,
           'educas' => $educas
       ]);
   }


    public function facuMail(Request $request)
    {
        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'cell' => $request->cell,
            'message' => $request->message

        ];

        Mail::send(new FacuContact($data));

        return redirect()->route('facuContact')
            ->with('mensagem', 'E-mail enviado com sucesso!');

    }

    public function facuMatricula(Request $request)
    {
        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'cell' => $request->cell,
            'course' => $request->course,
            'message' => $request->message

        ];

        Mail::send(new FacuMatricula($data));

        return redirect()->back()->with('message', 'E-mail enviado com sucesso!');


    }
}
