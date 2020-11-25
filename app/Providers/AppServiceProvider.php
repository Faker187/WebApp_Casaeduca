<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Sitio;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $eslogan = Sitio::where('id' ,1)->first()->valor;
        $invitacionPlanAcademico = Sitio::where('id' ,2)->first()->valor;
        $sobreNosotros = Sitio::where('id' ,3)->first()->valor;
        $direccion = Sitio::where('id' ,4)->first()->valor;
        $telefono = Sitio::where('id' ,5)->first()->valor;
        $email = Sitio::where('id' ,6)->first()->valor;
        $facebook = Sitio::where('id' ,7)->first()->valor;
        $twitter = Sitio::where('id' ,8)->first()->valor;
        $instagram = Sitio::where('id' ,9)->first()->valor;
        $whatsapp = Sitio::where('id' ,10)->first()->valor;

        View::share('eslogan',$eslogan);
        View::share('invitacionPlanAcademico',$invitacionPlanAcademico);
        View::share('sobreNosotros',$sobreNosotros);
        View::share('direccion',$direccion);
        View::share('telefono',$telefono);
        View::share('email',$email);
        View::share('facebook',$facebook);
        View::share('twitter',$twitter);
        View::share('instagram',$instagram);
        View::share('whatsapp',$whatsapp);
  
    }
}
