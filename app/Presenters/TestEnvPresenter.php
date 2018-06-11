<?php
namespace App\Presenters;

use Laracasts\Presenter\Presenter;


class TestEnvPresenter extends Presenter {

    public function browserIcon()
    {

        switch (strtolower($this->browser)) {
            case 'ie':
                return 'fa fa-internet-explorer';
                break;
            case 'edge':
                return 'fa fa-internet-explorer';
                break;
            case 'safari':
                return 'fa fa-safari';
                break;
            case 'opera':
                return 'fa fa-opera';
                break;
            case 'chrome':
                return 'fa fa-chrome';
                break;
            case 'firefox':
                return 'fa fa-firefox';
                break;
            default:
                return '';
                break;
        }


    }

    public function osIcon()
    {

        switch (strtolower($this->os)) {
            case 'windows':
                return 'fa fa-windows';
                break;
            case 'macos':
                return 'fa fa-apple';
                break;
            case 'ios':
                return 'fa fa-apple';
                break;
            case 'ubuntu':
                return 'fa fa-linux';
                break;
            default:
                return false;
                break;
        }

    }

    public function osTypeIcon()
    {

        switch (strtolower($this->env_type)) {
            case 'phone':
                return 'fa fa-mobile';
                break;
            case 'tablet':
                return 'fa fa-tablet';
                break;
            default:
                return 'fa fa-desktop';
                break;
        }

    }


    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }

}
