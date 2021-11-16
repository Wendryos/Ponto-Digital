@extends('app')
@section('title', 'Login')


@push('styles')
         <style>
                 * { margin: 0; padding: 0; }
                 body, html {
                        width:  100%;
                        height: 100%;
                        font-family: 'Roboto', sans-serif;
                 }
                 div, input, textarea, label, button, a, li, table, td, th { 
                        font-family: 'Roboto', sans-serif;
                 }
                 .content {
                         width:  100%;
                         height: 100%;
                 }

                 @media only screen and ( min-width: 768px ) {

                        .section__entrance {
                                width:  100%;
                                height: 100%;
                                position: absolute;
                                top:  0;
                                left: 0;
                                background: #fff;
                                display: grid;
                                grid-column: auto;
                                grid-template-columns: 55% 45%;

                        }

                        .__entrance__ {
                        margin: 0 auto;
                        max-height: 100%;
                        overflow-y: scroll;
                        }

                 }

                 @media only screen and ( max-width: 896px ) {

                        .section__entrance {
                                width:  100%;
                                height: 100%;
                                position: absolute;
                                top:  0;
                                left: 0;
                                background: #fff;
                                display: grid;
                                grid-column: auto;
                                grid-template-columns:90%;

                        }

                        .section__entrance .entrance__image, .section__entrance .entrance_description {
                                display: none;
                        }

                        .__entrance__ {
                                margin: 0 auto;
                                position: absolute;
                                left: 50%;
                                transform: translateX(-50%);
                                top: 0;
                                height: 100%;
                                align-items: flex-start!important;
                                padding-top: 75px!important;
                        
                        }
                        .container-login { 
                                width: 90%!important;
                        }

                }

            
                .__entrance__ {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        padding-top: 50px;
                        padding-bottom: 50px;
                        width: 100%;
                        background: rgb(255,255,255);
                        background: linear-gradient(90deg, rgba(249,249,249,1) 0%, rgba(253,253,255, 0.8) 47%, rgba(255, 255, 255,0.8) 100%);
                        overflow-y: scroll;
                        
                }




                 .section__entrance .entrance__image {
                         width:  100%;
                         height: calc( 100% - 200px );
                         margin-top: -0px;
                         background: url('resources/images/bg_entrance.png');
                         background-size: contain;
                         background-repeat: no-repeat;
                         background-position: center center;
                         filter:drop-shadow(0 0 10px rgba(0, 0, 0, 0.178)) drop-shadow(0 3px 2px rgba(0, 0, 0, 0.5));
                         
                 }

                 .section__entrance .entrance_register {
                         display: none;
                 }
           

                 .container-login { 
                        width: 60%;
                 }


                 #form-login {
                         width: 100%;
                 }





                 .field-group {
                         display: grid;
                         width: 100%;
                         margin: 0 auto;
                       
                 }




                 .field-group label {
                         position: relative;
                         top: 6px;
                         z-index: 999999;
                         background: transparent;
                         width: auto;
                         max-width: 64px;
                         left: 40px;
                         text-align: center;
                         color: var(--dark-blue);    
                         line-height: 10px;
                         padding-left:  5px;
                         padding-right: 5px;
                         font-size: 14px;
                         font-weight: 500;
                         letter-spacing: 0.5px;
                         background-color: transparent;
                       
                 }
                 .field-group label::before {
                        content: "";
                        border-top: 2px solid rgb(255, 255, 255);
                        left:  0px;
                        right: 0px;
                        position: absolute;
                        top: 2px;
                        z-index: -1;
                 }

          

                 .field-group input {
                         height: 40px;
                         width: calc( 100% - 36px );
                         border-radius: 50px;
                         border: none;
                         outline: none;
                         padding-left: 40px;
                         box-shadow: 0 0 2px var(--dark-blue), 0 3px 2px rgba(9, 30, 53, 0.096);
                         box-sizing: border-box;
                         background: transparent;
                         padding-bottom: 2px;
                         position: relative;
                         left: 50%;
                         transform: translateX(-50%);
                 }

                 .field-group .icon-input {
                         position: relative;
                         top: -28px;
                         left: 35px;
                         color: var(--dark-blue-transparent);
                         width: 32px;
                         height: 32px;
                 }

                 .field-group #view-password,   .field-group #view-password-register {
                        color: var(--dark-blue-transparent);
                        position: relative;
                        top: -70px;
                        left: calc( 100% - 56px );
                        width: 32px;
                        height: 36px;
                        background: rgb(255, 255, 255);
                        padding-left: 5px;
                        display: flex;
                        justify-content: left;
                        align-items: center;
                        border-radius: 100%;
                        cursor: pointer;
                 }

                 .container-title {
                         font-weight: 600;
                         letter-spacing: 0.9px;
                         font-size: 26px;
                         margin-left: 25px;
                         margin-bottom: 50px;
                         border-bottom: 1px solid rgba(9, 30, 53, 0.295);
                         text-align: center;
                         padding-bottom: 8px;
                 }

                 .field-options {
                      
                         display: flex;
                         padding-left: 0;
                         width: 100%;
                         margin: 0 auto;
                         margin-top: -40px;
                         padding-left: 18px;

                 }
               
                 .field-options {
                      
                      display: grid;
                      padding-left: 0;
                      width:  calc( 100% - 55px );
                      margin: 0 auto;
                      margin-top: -45px;
                      padding-left: 0px;

              }  

              .field-options #forgotten-password {
                      color:var(--green);
                      font-weight: 600;
                      letter-spacing: 0.2px;
                      text-decoration: none;
                      margin-bottom: 15px;
                      text-shadow: 0 2px 1px rgba(9, 30, 53, 0.048);
                      text-align: center;
              }

              .field-options #action-register, 
              .field-options #action-login {
                      color:var(--green);
                      font-weight: 600;
                      letter-spacing: 0.2px;
                      text-decoration: none;
                      margin-bottom: 15px;
                      margin-top:    20px;
                      text-shadow: 0 2px 1px rgba(9, 30, 53, 0.048);
                      text-align: center;
              }
              

              .field-options button {
                      background: var(--green);
                      font-weight: 500;
                      max-width: 75%;
                      position: relative;
                      left: 50%;
                      transform: translateX(-50%);
                      padding-top: 10px;
                      padding-bottom: 10px;
                      border-radius: 25px;
                      border: none;
                      font-size: 18px;
                      color: #fff;
                      cursor: pointer;
                      box-shadow:  0 4px 4px rgba(9, 30, 53, 0.151);
                      text-shadow: 0 2px 1px rgba(9, 30, 53, 0.37);
                      transition: 0.5s;

              }
              .field-options button:hover { 
                background: var(--dark-green);
              }

              .entrance_description {
                background: rgb(255,255,255);
                width: calc( 100% - 40px );
                padding-left:  20px;
                padding-right: 20px;
               
              }
              
              .description-content {
                      padding-top: 30px;
                      text-align: center;
              }
              .description-title {
                      font-size: 32px;
                      font-weight: 600;
                      letter-spacing: 0.5px;
                      text-align: center;
                      padding-left: 15px;
                      text-shadow: 0 0 3px rgba(8, 59, 107, 0.1);
              }

              .description-text {
                      font-size: 16px;
                      font-weight: 400;
                      letter-spacing: 0.6px;
                      margin-top: 10px;
                      text-shadow: 0 0 3px rgba(8, 59, 107, 0.1);
              }


        </style>
@endpush

 
@section('content')
        <div class="content">
                <div class="section__entrance">
                        <div class="entrance_description">
                                <div class="description-content">
                                        <div class="description-title"> Uma maneira fácil de controlar seus horários </div>
                                        <div class="description-text">  Controle de maneira fácil e simples seus horários, e nunca fique em dúvida sobre suas horas trabalhadas. </div>
                                </div>
                                <div class="entrance__image"></div>
                        </div>
                       


                        <div class="__entrance__ entrance_login">
                                <div class="container-login">
                                        <div class="container-title"> Login  </div>
                                        <form id="form-login">
                                                <div class="field-group">
                                                        <label for="email_login"> E-mail </label>
                                                        <input type="email" name="email" id="email_login" required>
                                                        <i class="icon-input fas fa-envelope"> </i>

                                                </div>
                                                <div class="field-group">
                                                        <label for="senha_login"> Senha </label>
                                                        <input type="password" name="email" id="senha_login" required>
                                                        <i class="icon-input fas fa-lock"> </i>
                                                        <i class="fas fa-eye" id="view-password"></i>
                                                </div>
                                                <div class="field-options">
                                                        <a href="javascript:void()" id="forgotten-password"> Esqueceu sua senha? </a>
                                                        <button type="submit"> Login </button>
                                                        <a href="javascript:void()" class="__action" id="action-register" data-entrance="register"> Não possui uma conta? Registre-se já </a>
                                                </div>

                                        </form>                                         
                                </div>
                        </div>

                        <div class="__entrance__ entrance_register">
                                <div class="container-login">
                                        <div class="container-title"> Cadastro  </div>
                                        <form id="form-register">
                                                <div class="field-group">
                                                        <label for="email_register"> E-mail </label>
                                                        <input type="email" name="email" id="email_register" required>
                                                        <i class="icon-input fas fa-envelope"> </i>

                                                </div>
                                                <div class="field-group">
                                                        <label for="name_register"> Nome </label>
                                                        <input type="text" name="name" id="name_register" required>
                                                        <i class="icon-input fas fa-user"> </i>

                                                </div>
                                       

                                                <div class="field-group">
                                                        <label for="password_register"> Senha </label>
                                                        <input type="password" name="password" id="password_register" required>
                                                        <i class="icon-input fas fa-lock"> </i>
                                                        <i class="fas fa-eye" id="view-password-register"></i>
                                                </div>
                                            

                                                <div class="field-options">
                                                        <button type="submit"> Cadastrar </button>
                                                        <a href="javascript:void()" class="__action" id="action-register" data-entrance="login"> Já possui uma conta?  </a>
                                                </div>

                                        </form>                                         
                                </div>
                        </div>


                      

                </div>
               
        </div>
      

@endsection

@push('scripts')
  <script>
          document.querySelector("#view-password").addEventListener('click', function() {
                let field = document.querySelector("#senha_login");
                ( field.getAttribute('type') == 'password')   ? field.setAttribute('type', 'text')             : field.setAttribute('type', 'password');
                ( this.getAttribute('class') == 'fas fa-eye') ? this.setAttribute('class', 'fas fa-eye-slash') : this.setAttribute('class', 'fas fa-eye');

          });
          document.querySelector("#view-password-register").addEventListener('click', function() {
                let field = document.querySelector("#password_register");
                ( field.getAttribute('type') == 'password')   ? field.setAttribute('type', 'text')             : field.setAttribute('type', 'password');
                ( this.getAttribute('class') == 'fas fa-eye') ? this.setAttribute('class', 'fas fa-eye-slash') : this.setAttribute('class', 'fas fa-eye');

          });


          document.querySelectorAll('.__action').forEach(element => {
                  element.addEventListener('click', function() {
                          let el = this.getAttribute('data-entrance');
                          (el == 'register') ? [ 
                          document.querySelector('.entrance_register').style = 'display: flex',
                          document.querySelector('.entrance_login').style    = 'display: none'
                          ] : [
                          document.querySelector('.entrance_register').style = 'display: none',
                          document.querySelector('.entrance_login').style    = 'display: flex'
                          ]
                  })
          });

 </script>

@endpush