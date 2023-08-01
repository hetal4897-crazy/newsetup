<style type="text/css">
  .page-wrapper .sidebar-main-title > div {
    background-color: #EFF3F9;
    padding: 15px 17px;
    border-radius: 5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.page-wrapper .sidebar-main-title h4 {
    color: #0E7C7B;
    letter-spacing: 0.4px;
    margin-bottom: 0px;
}
.page-wrapper .sidebar-main-title h5 {
    color: black;
    letter-spacing: 0.4px;
    margin-bottom: 0px;
}


.page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .logo-wrapper, .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .logo-icon-wrapper {
    padding: 7px 18px;
}

.page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .simplebar-offset {
    height: auto;
}
</style>
<div class="logo-wrapper">
   <a href="{{route('dashboard')}}"><img class="img-fluid for-light" src="{{asset('public/logo.png')}}" style="width: auto;height: 64px;" alt=""><img class="img-fluid for-dark" src="{{asset('public/logo.png')}}" alt=""></a>
   <div class="back-btn"><i class="fa fa-angle-left"></i></div>
</div>
<div class="logo-icon-wrapper"><a href="{{route('dashboard')}}"><img class="img-fluid" src="{{asset('public/logo.png')}}" alt=""></a></div>
<nav class="sidebar-main">
   <div class="left-arrow disabled" id="left-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
         <line x1="19" y1="12" x2="5" y2="12"></line>
         <polyline points="12 19 5 12 12 5"></polyline>
      </svg>
   </div>
   <div id="sidebar-menu">
      <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
         <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
               <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
               <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                  <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                     <div class="simplebar-content" style="    padding-bottom: 92px;">
                        <li class="back-btn">
                           <a href="{{route('dashboard')}}" class="active"><img class="img-fluid" src="{{asset('public//assets/images/logo-icon.png')}}" alt=""></a>
                           <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true">        </i></div>
                        </li>
                        <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard')}}">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g>
                                    <g>
                                       <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                 </g>
                              </svg>
                              <span>Dashboard</span>
                              <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                           </a>
                        </li>
                        <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title link-nav" href="{{route('appointment')}}">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g> 
                          <g> 
                            <path d="M15.7499 9.47167V6.43967C15.7549 4.35167 14.0659 2.65467 11.9779 2.64967C9.88887 2.64567 8.19287 4.33467 8.18787 6.42267V9.47167" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.94995 14.2074C2.94995 8.91344 5.20495 7.14844 11.969 7.14844C18.733 7.14844 20.988 8.91344 20.988 14.2074C20.988 19.5004 18.733 21.2654 11.969 21.2654C5.20495 21.2654 2.94995 19.5004 2.94995 14.2074Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg>
                              <span>Appointment</span>
                              <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                           </a>
                        </li>
                        <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title link-nav" href="{{route('timeslot')}}">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g> 
                          <g> 
                            <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg>
                              <span>Time slot</span>
                              <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                           </a>
                        </li>
                       
                        
                        <li class="sidebar-list">
                           <a class="sidebar-link sidebar-title link-nav" href="https://askpinkypromise.com/tele-consult/cache_clear" target="_blank">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g> 
                      <g> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg>
                              <span>Purge Cache</span>
                              <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                           </a>
                        </li>
                        
                        
                        
                      
                        
                        
                    
                     </div>
                  </div>
               </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 2035px;"></div>
         </div>
         <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
         </div>
         <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 55px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
         </div>
      </ul>
   </div>
   <div class="right-arrow" id="right-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
         <line x1="5" y1="12" x2="19" y2="12"></line>
         <polyline points="12 5 19 12 12 19"></polyline>
      </svg>
   </div>
</nav>
</div>