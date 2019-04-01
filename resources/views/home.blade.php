@extends('layouts.app')
@section('title', 'Account')
@section('mailchimp')
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2d1e7e94ff9f6fc81ae3ce16f/b1abbe355904c87db9c3b97d0.js");</script>    
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                     @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="bold text-body">Hi {{ Auth::user()->name }}! 👋</h4>
                    <h5 class="bold">{{ Auth::user()->username }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold"><i class="fas fa-user"></i> Profile Information</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <th>{{ Auth::user()->name }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td>{{ Auth::user()->username }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Account</th>
                                    <td>@if(Auth::user()->is_admin == 1)Admin @else Pro @endif</td>
                                </tr>
                                <tr>
                                    <th scope="row">Paid Until</th>
                                    <td>
                                        @if(Auth::user()->paid_until == NULL)
                                        Lifetime 🔥
                                        @else
                                        {{date('F, d, Y', strtotime(Auth::user()->paid_until))}} 👌
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card card-form">
                <div class="card-body">
                    <h6 class="bold"><i class="fas fa-share-alt-square"></i> Share Colorffy</h6>
                    <hr>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
            </div>
            <div class="card card-form">
                <div class="card-body bold">
                    <h6 class="bold"><i class="fas fa-fill-drip"></i> Color Shortcuts</h6>
                    <hr>
                    <a href="/saved/gradients" class="color-darkblue">🔖 My Gradients</a><br>
                    <a href="/favorites/gradients" class="color-darkblue text-spacing">❤️ Liked Gradients</a><br>
                    <a href="/favorites/palettes" class="color-darkblue">❤️ Liked Palettes</a><br>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-form">
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link color-darkblue" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    📧 Colorffy mailing list 
                                </button>
                            </h 2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <!-- Begin Mailchimp Signup Form -->
                                    <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
                                    <style type="text/css">
                                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                                        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                    </style>
                                    <style type="text/css">
                                        #mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
                                        #mergeRow-gdpr {margin-top: 20px;}
                                        #mergeRow-gdpr fieldset label {font-weight: normal;}
                                        #mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
                                    </style>
                                    <div id="mc_embed_signup">
                                    <form action="https://colorffy.us20.list-manage.com/subscribe/post?u=2d1e7e94ff9f6fc81ae3ce16f&amp;id=1a0f2e0a12" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL">Subscribe to our mailing list for gradients and palettes every weekend</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                    <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                        <div class="content__gdpr">
                                            <label>Marketing Permissions</label>
                                            <p>Please select all the ways you would like to hear from Colorffy:</p>
                                            <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                            <label class="checkbox subfield" for="gdpr_16623"><input type="checkbox" id="gdpr_16623" name="gdpr[16623]" value="Y" class="av-checkbox gdpr"><span>Email</span> </label><label class="checkbox subfield" for="gdpr_16627"><input type="checkbox" id="gdpr_16627" name="gdpr[16627]" value="Y" class="av-checkbox gdpr"><span>Direct Mail</span> </label><label class="checkbox subfield" for="gdpr_16631"><input type="checkbox" id="gdpr_16631" name="gdpr[16631]" value="Y" class="av-checkbox gdpr"><span>Customized Online Advertising</span> </label>
                                            </fieldset>
                                            <p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website.</p>
                                        </div>
                                        <div class="content__gdprLegal">
                                            <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>
                                        </div>
                                    </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2d1e7e94ff9f6fc81ae3ce16f_1a0f2e0a12" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                    </div>
                                    <!--End mc_embed_signup-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5c883fc8cbb218001761db20&product='inline-share-buttons'" async="async"></script>
    @if($alert)
    <script>
        swal("{{ _('Monthly subscription') }}", "{{ $alertMessage }}", "warning");
    </script>
    @endif
@endsection