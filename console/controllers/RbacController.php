<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $utilisateur = Yii::$app->authManager;

        /**
         * Permissions
         * Les permissions sont sur les vignettes trombinoscope
         */


        // Permission : AjouterVignette
        $AjouterVignette = $utilisateur->createPermission('AjouterVignette');
        $AjouterVignette->description = 'L\'utilisateur peut creer une nouvelle vignette trombinoscope';
        $utilisateur->add($AjouterVignette);

        // Permission : ModifierVignette
        $ModifierVignette = $utilisateur->createPermission('ModifierVignette');
        $ModifierVignette->description = 'L\'utilisateur peut modifier une vignette trombinoscope';
        $utilisateur->add($ModifierVignette);

        // Permission : consulterVignette
        $consulterVignette = $utilisateur->createPermission('consulterVignette');
        $consulterVignette->description = 'L\'utilisateur peut consulter une vignette trombinoscope';
        $utilisateur->add($consulterVignette);
        
        // Les permissions sont sur les vignettesDSI focntionnelle

        // Permission : AjouterVignetteDSI
        $AjouterVignetteDSI = $utilisateur->createPermission('AjouterVignetteDSI');
        $AjouterVignetteDSI->description = 'L\'utilisateur peut creer une nouvelle fiche DSI';
        $utilisateur->add($AjouterVignetteDSI);

        // Permission : ModifierVignetteDSI
        $ModifierVignetteDSI = $utilisateur->createPermission('ModifierVignetteDSI');
        $ModifierVignetteDSI->description = 'L\'utilisateur peut modifier une fiche DSI';
        $utilisateur->add($ModifierVignetteDSI);

        // Permission : consulterVignetteDSI
        $consulterVignetteDSI = $utilisateur->createPermission('consulterVignetteDSI');
        $consulterVignetteDSI->description = 'L\'utilisateur peut consulter une fiche DSI';
        $utilisateur->add($consulterVignetteDSI);

        /**
         * Roles
         */

        // create and add "user" role
        $user = $utilisateur->createRole('utilisateur');
        $utilisateur->add($user);

        // create and add "author" role
        $drh = $utilisateur->createRole('drh');
        $utilisateur->add($drh);

        // create and add "author" role
        $dsi = $utilisateur->createRole('dsi');
        $utilisateur->add($dsi);

        // create and add "admin" role
        $admin = $utilisateur->createRole('admin');
        $utilisateur->add($admin);

        /**
         * Mutual connections
         */

        // "drh" peut creer nouvelle vignette
        $utilisateur->addChild($drh, $AjouterVignette);
        // ...et...
        // "drh" peut modifier nouvelle vignette
        $utilisateur->addChild($drh, $ModifierVignette);
        
        
        // "dsi" peut creer nouvelle vignetteDSI
        $utilisateur->addChild($dsi, $AjouterVignetteDSI);
        // ...et...
        // "dsi" peut modifier nouvelle vignetteDSI
        $utilisateur->addChild($dsi, $ModifierVignetteDSI);
        

        // "admin" peut faire tout ce que "drh" fait
        $utilisateur->addChild($admin, $drh);
        // ...et...
        // "admin" peut faire tout ce que "dsi" fait
        $utilisateur->addChild($admin, $dsi);     

    }
}