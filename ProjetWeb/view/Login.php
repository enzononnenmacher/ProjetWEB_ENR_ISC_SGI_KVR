<?php

/**
 * @File : login.php
 * @Brief : Displays login page
 * @Author : Created by Shanshe GUNDISHVILI
 * @Author : Updated by Kevin VAUCHER
 * @Version : 17-02-2021
 */


$title = 'Contacts';

ob_start();
?>

    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        <article>
            <header class="section background-primary text-center">
                <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Se connecter</h1>
            </header>
            <div class="section background-white">
                <div class="line">
                    <div class="margin">

                        <!-- Company Information -->
                        <div class="s-12 m-12 l-6">
                            <h2 class="text-uppercase text-strong margin-bottom-30">Company Information</h2>
                            <div class="float-left">
                                <i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
                            </div>
                            <div class="margin-left-80 margin-bottom">
                                <h4 class="text-strong margin-bottom-0">Company Address</h4>
                                <p>Responsive Street 7<br>
                                    London<br>
                                    UK, Europe
                                </p>
                            </div>
                            <div class="float-left">
                                <i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
                            </div>
                            <div class="margin-left-80 margin-bottom">
                                <h4 class="text-strong margin-bottom-0">E-mail</h4>
                                <p>contact@sampledomain.com<br>
                                    office@sampledomain.com
                                </p>
                            </div>
                            <div class="float-left">
                                <i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
                            </div>
                            <div class="margin-left-80">
                                <h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
                                <p>0800 4521 800 50<br>
                                    0450 5896 625 16<br>
                                    0798 6546 465 15
                                </p>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="s-12 m-12 l-6">
                            <h2 class="text-uppercase text-strong margin-bottom-30">Se connecter</h2>
                            <form class="customform" action='index.php?action=login' method='POST'>
                                <div class="line">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-6">
                                            <form action='../index.php?action=login' method='POST'>
                                                <div class="form-group">
                                                    <label for="Email">Email *</label>
                                                    <input class="form-control" type="text" name="inputUserEmailAddress"
                                                           id="Email" aria-describedby="userNameHelp"
                                                           placeholder="Enter user name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword">Password *</label>
                                                    <input class="form-control" type="password" name="inputUserPsw"
                                                           id="inputPassword" placeholder="Password" required>
                                                    <?php if(isset($loginErrorMessage)): ?>
                                                        <p>Mot de passe et/ou email incorrect</p>
                                                    <?php elseif(!isset($loginErrorMessage)): ?>

                                                    <?php endif; ?>
                                                </div>
                                                <div>
                                                    <div class="s-12 m-12 l-4">
                                                        <button class="submit-form button background-primary border-radius text-white"
                                                                type="submit">Connexion
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </form>
        </article>
        <div class="background-primary padding text-center">
            <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a>
            <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
            <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
            <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>
        </div>
        <!-- MAP -->
        <div class="s-12 grayscale center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1459734.5702753505!2d16.91089086619977!3d48.577103681657675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1457640551761"
                    width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </main>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>