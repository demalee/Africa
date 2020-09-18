<template>
    <div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
                <div class="logo-img"><img src="../app-assets/img/logo-dark.png" alt="Convex Logo"/></div>
                <span class="text align-middle">AFRICA</span></a><a id="sidebarToggle" href="javascript:;"
                                                                    class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;"
                                                                              class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                class="ft-circle"></i></a></div>
        </div>
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class=" nav-item">
                        <router-link to="/"class=" nav-item" exact>
                            <i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span>
                    </router-link>
                    </li>

                    <li class="has-sub nav-item"><a href="#"><i class="ft-message-circle mr-2"></i><span data-i18n=""

                                                                                                         class="menu-title">SMS</span></a>
                        <ul class="menu-content">

                            <li >
                                <router-link to="/sms/inbox"  class=" nav-item"  exact>
                                <i class=""></i><span data-i18n="" class="menu-title">Inbox</span>
                                </router-link>
                            </li>

                            <li class="has-sub"><a href="#" class="menu-item">Bulk SMS</a>
                                <ul class="menu-content">
                                    <li>
                                        <router-link to="/sms/outbox"  class=" nav-item" exact>
                                        <a  class="menu-item">Outbox</a>
                                        </router-link>
                                    </li>
                                    <li>
                                        <router-link to="/sms/outbox"  class=" nav-item" exact>

                                        <a  class="menu-item">Analytics</a>
                                        </router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Premium SMS</a>
                                <ul class="menu-content">
                                    <li><a href="{{url('premium/sms')}}" class="menu-item">Outbox</a>
                                    </li>

                                    <li><a href="{{url('premium/products')}}" class="menu-item">Suscription Products</a>
                                    </li>
                                    <li><a href="{{url('premium/subscription')}}" class="menu-item">Create Subscription</a>
                                    </li>
                                    <li><a href="{{url('premium/analytics')}}" class="menu-item">Analytics</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Short codes</a>
                                <ul class="menu-content">
                                    <li><a href="{{url('code/codes')}}" class="menu-item">My short codes</a>
                                    </li>
                                    <li><a href="{{url('premium/create')}}" class="menu-item">Create Shortcodes</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Alphanumerics</a>
                                <ul class="menu-content">
                                    <li><a href="{{url('alphanumeric/alphanumeric')}}" class="menu-item">My Alphanumeric</a>
                                    </li>
                                    <li><a href="{{url('alphanumeric/create')}}" class="menu-item">Create Alphanumeric</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Send  URLs</a>
                                <ul class="menu-content">
                                    <li><a href="{{url('send/report')}}" class="menu-item">Delivery Reports</a>
                                    </li>
                                    <li><a href="{{url('send/message')}}" class="menu-item">Incoming Messages</a>
                                    </li>
                                    <li><a href="{{url('send/sms')}}" class="menu-item">Bulk SMS Opt Out</a>
                                    </li>
                                    <li><a href="{{url('send/notifications')}}" class="menu-item">Subscription Notifications</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-microphone"></i><span data-i18n=""

                                                                                                  class="menu-title">Voice</span></a>
                        <ul class="menu-content">

                            <li><a href="{{url('voice/phone')}}"><i class="icon-hme"></i><span data-i18n=""
                                                                                               class="menu-title">Phone number</span></a>
                            </li>

                            <li><a href="{{url('voice/create')}}"><i class="icon-ome"></i><span data-i18n=""
                                                                                                class="menu-title">create number</span></a>
                            </li>
                            <li><a href="{{url('voice/sessions')}}"><i class="icon-hme"></i><span data-i18n=""
                                                                                                  class="menu-title">Sessions</span></a>
                            </li>
                            <li><a href="{{url('voice/analytics')}}"><i class="icon-hoe"></i><span data-i18n=""
                                                                                                   class="menu-title">Analytics</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-list"></i><span data-i18n=""

                                                                                            class="menu-title">USSD</span></a>
                        <ul class="menu-content">

                            <li><a href=""><i class="icon-hme"></i><span data-i18n=""
                                                                         class="menu-title">Service Codes</span></a>
                            </li>

                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">create Channel</span></a>
                            </li>
                            <li><a href=""><i class="icon-hme"></i><span data-i18n=""
                                                                         class="menu-title">Sessions</span></a>
                            </li>
                            <li><a href=""><i class="icon-hoe"></i><span data-i18n=""
                                                                         class="menu-title">Analytics</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-credit-card"></i><span data-i18n=""

                                                                                                   class="menu-title">Airtime</span></a>
                        <ul class="menu-content">

                            <li><a href=""><i class="icon-hme"></i><span data-i18n=""
                                                                         class="menu-title">Transaction</span></a>
                            </li>

                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">Analytics</span></a>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Artime Callback </a>
                                <ul class="menu-content">
                                    <li><a href="sweet-alerts.html" class="menu-item">Status Callback URL</a>
                                    </li>
                                    <li><a href="toastr.html" class="menu-item">Validation Callback URL</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-wallet"></i><span data-i18n=""

                                                                                              class="menu-title">Payments</span></a>
                        <ul class="menu-content">

                            <li><a href=""><i class="icon-hme"></i><span data-i18n=""
                                                                         class="menu-title">products</span></a>
                            </li>

                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">Create Product</span></a>
                            </li>
                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">Topup wallet</span></a>
                            </li>
                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">Wallet</span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="icon-settings"></i><span data-i18n=""

                                                                                                class="menu-title">Settings</span></a>
                        <ul class="menu-content">
                            <li><a href=""><i class="icon-hme"></i><span data-i18n=""
                                                                         class="menu-title">products</span></a>
                            </li>

                            <li><a href=""><i class="icon-ome"></i><span data-i18n=""
                                                                         class="menu-title">API Key</span></a>
                            </li>

                        </ul>
                    </li>


                    <li class=" nav-item"><a href="google-map.html"><i class="icon-arrow-up"></i><span data-i18n=""
                                                                                                       class="menu-title">Launch simulator</span></a>
                    </li>

                    <li class=" nav-item"><a href="google-map.html"><i class="icon-emoticon-smile"></i><span data-i18n=""
                                                                                                             class="menu-title">Join Us on Slack</span></a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="sidebar-background"></div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a class="open-navbar-container"><i class="ft-more-vertical"></i></a></span>
            <a class="btn mr-1 btn-warning ">Sandbox
                <p class="d-none">Sandbox</p></a>

        </div>
        <div class="container-fluid">
            <div class="navbar-header">


            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mt-1 navbar-search text-left dropdown">
                            <a id="search" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                                <i class="ft-home"></i></a>
                        </li>


                        <li class="dropdown nav-item mt-1"><a id="dropdownBasic2" href="#" data-toggle="dropdown"
                                                              class="nav-link position-relative dropdown-toggle"><i
                            class="ft-bell blue-grey darken-4"></i><span
                            class="notification badge badge-pill badge-danger">4</span>
                            <p class="d-none">Notifications</p></a>
                            <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <div class="noti-list"><a class="dropdown-item noti-container py-2"><i
                                        class="ft-share info float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a
                                        class="dropdown-item noti-container py-2"><i
                                        class="ft-save warning float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a
                                        class="dropdown-item noti-container py-2"><i
                                        class="ft-repeat danger float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a
                                        class="dropdown-item noti-container py-2"><i
                                        class="ft-shopping-cart success float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 success">New Item In Your Cart</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a><a
                                        class="dropdown-item noti-container py-2"><i
                                        class="ft-heart info float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 info">New Sale</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a><a
                                        class="dropdown-item noti-container py-2"><i
                                        class="ft-box warning float-left d-block font-medium-4 mt-2 mr-2"></i><span
                                        class="noti-wrapper"><span
                                        class="noti-title line-height-1 d-block text-bold-400 warning">Order Delivered</span><span
                                        class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a>
                                    </div>
                                    <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read
                                        All Notifications</a>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item mt-1 d-none d-lg-block"></li>
                        <li class="dropdown nav-item mr-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown"
                                                              class="nav-link position-relative dropdown-user-link dropdown-toggle"><span
                            class="avatar avatar-online"><img id="navbar-avatar"
                                                              src="../app-assets/img/portrait/small/avatar-s-3.jpg"
                                                              alt="avatar"/></span>
                            <p class="d-none">User Settings</p></a>
                            <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a href="user-profile-page.html"
                                                                class="dropdown-item py-1"><i
                                    class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html"
                                                                                           class="dropdown-item py-1"><i
                                    class="ft-message-circle mr-2"></i><span>My Chat</span></a><a
                                    href="javascript:;"
                                    class="dropdown-item py-1"><i
                                    class="ft-settings mr-2"></i><span>Settings</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:;" class="dropdown-item"><i
                                        class="ft-power mr-2"></i><span>Logout</span></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</template>

<script>
export default {
    name: "header.vue"
}
</script>

<style scoped>

</style>
