@extends('portal.app')

@section('content')
<div class="page-content page-thin">
    <div class="row">
        <div class="col-md-12">
            <div class="md-alert alert alert-info alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
                <div class="media-body width-100p">
                    <p class="md-title">Welcome to payroll managment system</p>
                    <div class="md-txt">
                        <p>Material design is based upon the material design principle developed by Google. It's made with Bootstrap and Jquery.</p>
                        <p>Want to learn more? Here is Google website: <a href="https://www.google.com/design/spec/material-design/introduction.html#" target="_blank">Google Material Design</a></p>
                        <p class="m-t-20"><strong>What's new with Material Design? Here are main new features:</strong></p>
                        <ul>
                            <li>New Form Elements: <a href="material-forms.html">See material design form</a></li>
                            <li>New Buttons: <a href="material-buttons.html">See material design buttons</a></li>
                            <li>New Cards: <a href="material-cards.html">See material design cards</a></li>
                            <li>New Icons Set: <a href="material-icons.html">See material design icons</a></li>
                            <li>New Sliders: <a href="material-sliders.html">See material design sliders</a></li>
                            <li>New Colors: <a href="material-colors.html">See material design colors</a></li>
                        </ul>
                    </div>
                    <div class="md-image">
                        <img src="../assets/global/images/various/material-design.png" class="dis-block" alt="material design">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">      
        <div class="col-xlg-2 col-small-stats">
            <div class="row">
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                    <div class="panel">
                        <div class="panel-content widget-small bg-green">
                            <div class="title">
                                <h1>Virgin Mobile</h1>
                                <p>Last month trending</p>
                                <span>-8.452%</span>
                            </div>
                            <div class="content">
                                <div id="stock-virgin-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                    <div class="panel">
                        <div class="panel-content widget-small bg-purple">
                            <div class="title">
                                <h1>Ebay Inc</h1>
                                <p>Last month trending</p>
                                <span>+2.124%</span>
                            </div>
                            <div class="content">
                                <div id="stock-ebay-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xlg-12 col-lg-4 col-sm-4">
                    <div class="panel">
                        <div class="panel-content widget-small bg-primary">
                            <div class="title">
                                <h1>Facebook Corp.</h1>
                                <p>Last month trending</p>
                                <span>+1.054%</span>
                            </div>
                            <div class="content">
                                <div id="stock-facebook-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row">      
     
        <div class="col-md-12 col-sm-6 portlets">
            <div class="widget widget_calendar bg-dark">
                <div class="multidatepicker"></div>
            </div>            
        </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2016 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
            </p>
            <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
        </div>
    </div>
</div>
@endsection

@prepend('scripts')
<script  src="{{ asset('assets/global/js/pages/dashboard.js') }}"></script>
@endprepend
