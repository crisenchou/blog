@extends('layouts.app')

@section('content')
    <div class="position-relative">
        <div id="signup-box" class="signup-box visible widget-box no-border">
            <div class="widget-body">
                <div class="widget-main">
                    <h4 class="header green lighter bigger">
                        <i class="ace-icon fa fa-users blue"></i>
                        New User Registration
                    </h4>

                    <div class="space-6"></div>
                    <p> Enter your details to begin: </p>

                    <form>
                        {{csrf_field()}}
                        <fieldset>
                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control"
                                                                   placeholder="Email"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
                            </label>

                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control"
                                                                   placeholder="Username"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                            </label>

                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control"
                                                                   placeholder="Password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
                            </label>

                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password_comfirmation"
                                                                   class="form-control"
                                                                   placeholder="Repeat password"/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
                            </label>

                            <label class="block">
                                <input type="checkbox" class="ace"/>
                                <span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
                            </label>

                            <div class="space-24"></div>

                            <div class="clearfix">
                                <button type="reset" class="width-30 pull-left btn btn-sm">
                                    <i class="ace-icon fa fa-refresh"></i>
                                    <span class="bigger-110">Reset</span>
                                </button>

                                <button type="button"
                                        class="width-65 pull-right btn btn-sm btn-success">
                                    <span class="bigger-110">Register</span>

                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <div class="toolbar center">
                    <a href="{{url('login')}}" class="back-to-login-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Back to login
                    </a>
                </div>
            </div><!-- /.widget-body -->
        </div><!-- /.signup-box -->
    </div><!-- /.position-relative -->
@endsection

