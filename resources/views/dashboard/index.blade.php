@extends('layouts.BaseLayoutDashboard')

@section('content')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
<div class="container">
<div class="alert-list">

<div class="alert alert-danger alert-mg-b-0" role="alert">Oh snap! Change a few things up and try submitting again.
</div>
</div>
</div>

<!-- End Sale Statistic area-->
<!-- Start Email Statistic area-->
{{--<div class="notika-email-post-area p-t-5">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="email-statis-inner notika-shadow">--}}
{{--                    <div class="email-ctn-round">--}}
{{--                        <div class="email-rdn-hd">--}}
{{--                            <h2>Email Statistics</h2>--}}
{{--                        </div>--}}
{{--                        <div class="email-statis-wrap">--}}
{{--                            <div class="email-round-nock">--}}
{{--                                <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">--}}
{{--                            </div>--}}
{{--                            <div class="email-ctn-nock">--}}
{{--                                <p>Total Emails Sent</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="email-round-gp">--}}
{{--                            <div class="email-round-pro">--}}
{{--                                <div class="email-signle-gp">--}}
{{--                                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>--}}
{{--                                </div>--}}
{{--                                <div class="email-ctn-nock">--}}
{{--                                    <p>Bounce Rate</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="email-round-pro">--}}
{{--                                <div class="email-signle-gp">--}}
{{--                                    <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>--}}
{{--                                </div>--}}
{{--                                <div class="email-ctn-nock">--}}
{{--                                    <p>Total Opened</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">--}}
{{--                                <div class="email-signle-gp">--}}
{{--                                    <input type="text" class="knob" value="0" data-rel="45" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>--}}
{{--                                </div>--}}
{{--                                <div class="email-ctn-nock">--}}
{{--                                    <p>Total Ignored</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">--}}
{{--                    <div class="recent-post-ctn">--}}
{{--                        <div class="recent-post-title">--}}
{{--                            <h2>Recent Posts</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="recent-post-items">--}}
{{--                        <div class="recent-post-signle rct-pt-mg-wp">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex">--}}
{{--                                    <div class="recent-post-img">--}}
{{--                                        <img src="img/post/2.jpg" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="recent-post-it-ctn">--}}
{{--                                        <h2>Smith</h2>--}}
{{--                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="recent-post-signle">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex rct-pt-mg">--}}
{{--                                    <div class="recent-post-img">--}}
{{--                                        <img src="img/post/1.jpg" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="recent-post-it-ctn">--}}
{{--                                        <h2>John Deo</h2>--}}
{{--                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="recent-post-signle">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex rct-pt-mg">--}}
{{--                                    <div class="recent-post-img">--}}
{{--                                        <img src="img/post/4.jpg" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="recent-post-it-ctn">--}}
{{--                                        <h2>Malika</h2>--}}
{{--                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="recent-post-signle">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex rct-pt-mg">--}}
{{--                                    <div class="recent-post-img">--}}
{{--                                        <img src="img/post/2.jpg" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="recent-post-it-ctn">--}}
{{--                                        <h2>Smith</h2>--}}
{{--                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="recent-post-signle">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex rct-pt-mg">--}}
{{--                                    <div class="recent-post-img">--}}
{{--                                        <img src="img/post/1.jpg" alt="" />--}}
{{--                                    </div>--}}
{{--                                    <div class="recent-post-it-ctn">--}}
{{--                                        <h2>John Deo</h2>--}}
{{--                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="recent-post-signle">--}}
{{--                            <a href="#">--}}
{{--                                <div class="recent-post-flex rc-ps-vw">--}}
{{--                                    <div class="recent-post-line rct-pt-mg">--}}
{{--                                        <p>View All</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">--}}
{{--                <div class="recent-items-wp notika-shadow sm-res-mg-t-30">--}}
{{--                    <div class="rc-it-ltd">--}}
{{--                        <div class="recent-items-ctn">--}}
{{--                            <div class="recent-items-title">--}}
{{--                                <h2>Recent Items</h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="recent-items-inn">--}}
{{--                            <table class="table table-inner table-vmiddle">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>ID</th>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th style="width: 60px">Price</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td class="f-500 c-cyan">4555</td>--}}
{{--                                    <td>Samsung Galaxy Mega</td>--}}
{{--                                    <td class="f-500 c-cyan">$921</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="f-500 c-cyan">4556</td>--}}
{{--                                    <td>Huawei Ascend P6</td>--}}
{{--                                    <td class="f-500 c-cyan">$240</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="f-500 c-cyan">8778</td>--}}
{{--                                    <td>HTC One M8</td>--}}
{{--                                    <td class="f-500 c-cyan">$400</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="f-500 c-cyan">5667</td>--}}
{{--                                    <td>Samsung Galaxy Alpha</td>--}}
{{--                                    <td class="f-500 c-cyan">$870</td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="f-500 c-cyan">7886</td>--}}
{{--                                    <td>LG G3</td>--}}
{{--                                    <td class="f-500 c-cyan">$790</td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                        <div id="recent-items-chart" class="flot-chart-items flot-chart vt-ct-it tb-rc-it-res"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Email Statistic area-->
<!-- Start Realtime sts area-->
<div class="realtime-statistic-area">
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
        <div class="add-todo-list notika-shadow mg-t-30">
            <div class="realtime-ctn">
                <div class="realtime-title">
                    <h2>Hire</h2>
                </div>
            </div>
            <div class="card-box">
                <div class="todoapp">
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                                    <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">--}}
{{--                                    <div class="notika-todo-btn">--}}
{{--                                        <a href="#" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="notika-todo-scrollbar">--}}
{{--                                <ul class="list-group no-margn todo-list" id="todo-list"></ul>--}}
{{--                            </div>--}}
{{--                            <div id="todo-form">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">--}}
{{--                                        <div class="form-group todo-flex">--}}
{{--                                            <div class="nk-int-st">--}}
{{--                                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">--}}
{{--                                            </div>--}}
{{--                                            <div class="todo-send">--}}
{{--                                                <button class="btn-primary btn-md btn-block btn notika-add-todo" type="button" id="todo-btn-submit">Add</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="notika-chat-list notika-shadow mg-t-30 tb-res-ds-n dk-res-ds">
            <div class="realtime-ctn">
                <div class="realtime-title">
                    <h2>Manage</h2>
                </div>
            </div>
            <div class="card-box">
                <div class="chat-conversation">
                    <div class="widgets-chat-scrollbar">
{{--                                <ul class="conversation-list">--}}
{{--                                    <li class="clearfix">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/1.jpg" alt="male">--}}
{{--                                            <i>10:00</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap">--}}
{{--                                                <i>John Deo</i>--}}
{{--                                                <p>--}}
{{--                                                    Hello!--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="clearfix odd">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/2.jpg" alt="Female">--}}
{{--                                            <i>10:01</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap chat-widgets-cn">--}}
{{--                                                <i>Smith</i>--}}
{{--                                                <p>--}}
{{--                                                    Hi, How are you? What about our next meeting?--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="clearfix">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/1.jpg" alt="male">--}}
{{--                                            <i>10:01</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap">--}}
{{--                                                <i>John Deo</i>--}}
{{--                                                <p>--}}
{{--                                                    Yeah everything is fine--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="clearfix odd">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/2.jpg" alt="male">--}}
{{--                                            <i>10:02</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap chat-widgets-cn">--}}
{{--                                                <i>Smith</i>--}}
{{--                                                <p>--}}
{{--                                                    Wow that's great--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="clearfix">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/1.jpg" alt="male">--}}
{{--                                            <i>10:01</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap">--}}
{{--                                                <i>John Deo</i>--}}
{{--                                                <p>--}}
{{--                                                    Doing Better i am thinking about that..--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class="clearfix odd">--}}
{{--                                        <div class="chat-avatar">--}}
{{--                                            <img src="img/post/2.jpg" alt="male">--}}
{{--                                            <i>10:02</i>--}}
{{--                                        </div>--}}
{{--                                        <div class="conversation-text">--}}
{{--                                            <div class="ctext-wrap chat-widgets-cn">--}}
{{--                                                <i>Smith</i>--}}
{{--                                                <p>--}}
{{--                                                    Wow, You also tallent man...--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                    </div>
{{--                            <div class="chat-widget-input">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">--}}
{{--                                        <div class="form-group todo-flex">--}}
{{--                                            <div class="nk-int-st">--}}
{{--                                                <input type="text" class="form-control chat-input" placeholder="Enter your text">--}}
{{--                                            </div>--}}
{{--                                            <div class="chat-send">--}}
{{--                                                <button type="submit" class="btn btn-md btn-primary btn-block notika-chat-btn">Send</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
