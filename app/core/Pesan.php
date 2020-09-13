<?php

class Pesan {

    public static function setPesan($tipe, $text)
    {
        $_SESSION['pesan'] = [
            'tipe' => $tipe,
            'text' => $text
        ];
    }

    public static function pesanKesalahan()
    {
        if ( isset($_SESSION['pesan'])) {
            echo '<div class="alert alert-'.$_SESSION['pesan']['tipe'].' alert-dismissible fade show" role="alert">
             '.$_SESSION['pesan']['text'].'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
        
    }
}