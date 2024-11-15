@extends('admin.auth.master')
@section('content')


<div class="mb-3">
    <ul class="adminservicelist d-flex align-items-center flex-wrap">
        <li class="srv-resident">
            <a href="{{ route('admin.index') }}">
                <span>
                   Available Balance
                    <b>102400000.00</b>
                </span>
                <span class="servicons">
                    <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="srv-notice">
            <a href="#">
                <span>Un-Settle Amount<b>20</b></span>
                <span class="servicons">
                    <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="srv-announce">
            <a href="#">
                <span>Today's Pay In<b>5666</b></span>
                <span class="servicons">
                   <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>

                </span>
            </a>
        </li>
        <li class="srv-complaints">
            <a href="#">
                <span>Today's Wallet Load<b>34</b></span>
                <span class="servicons">
                    <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>
                </span>
            </a>
        </li>
        <li class="srv-member">
            <a href="#">
                <span>Today's Wallet Load<b>45</b></span>
                <span class="servicons">
                    <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>
                </span>
            </a>
        </li>
         <li class="srv-member">
            <a href="#">
                <span>Today's Charges<b>45</b></span>
                <span class="servicons">
                     <svg width=37" height="37" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13.275 17.5H15.675V17.425L11.55 13.05L11.575 12.975H11.825C12.725 12.975 13.471 12.7 14.063 12.15C14.655 11.6 15.0173 10.9583 15.15 10.225H16.15V9.05H15.125C15.075 8.8 14.9877 8.56267 14.863 8.338C14.7383 8.11333 14.584 7.89233 14.4 7.675H16.15V6.5H7.85V7.925H11.75C12.1833 7.925 12.5377 8.03333 12.813 8.25C13.0883 8.46667 13.2757 8.73333 13.375 9.05H7.85V10.225H13.4C13.3 10.5583 13.1083 10.846 12.825 11.088C12.5417 11.33 12.1583 11.4507 11.675 11.45H9.175V13.05L13.275 17.5ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88334 20.6867 5.825 19.9743 4.925 19.075C4.025 18.1757 3.31267 17.1173 2.788 15.9C2.26333 14.6827 2.00067 13.3827 2 12C1.99933 10.6173 2.262 9.31733 2.788 8.1C3.314 6.88267 4.02633 5.82433 4.925 4.925C5.82367 4.02567 6.882 3.31333 8.1 2.788C9.318 2.26267 10.618 2 12 2C13.382 2 14.682 2.26267 15.9 2.788C17.118 3.31333 18.1763 4.02567 19.075 4.925C19.9737 5.82433 20.6863 6.88267 21.213 8.1C21.7397 9.31733 22.002 10.6173 22 12C21.998 13.3827 21.7353 14.6827 21.212 15.9C20.6887 17.1173 19.9763 18.1757 19.075 19.075C18.1737 19.9743 17.1153 20.687 15.9 21.213C14.6847 21.739 13.3847 22.0013 12 22Z" fill="black"/>
                    </svg>
                </span>
            </a>
        </li>
    </ul>
</div>
<div class="row mb-3">
    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="shadow-sm shadow bg-white rounded-3 h-100">
          <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
    </div>

    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="shadow-sm shadow bg-white rounded-3 h-100">
                {{-- <div id="container" class="calendar-container"></div> --}}
                <div class="calendar" >
                    <div class="header p-3">
                    <h2 class="adTitle">Calendar</h2>
                    <div class="month monthyear">January 2024</div>
                    <div class="btns">
                        {{-- <div class="btn today-btn">
                        <i class="fas fa-calendar-day"></i>
                        </div> --}}
                        <div class="btn prev-btn">
                        <i class="fas fa-chevron-left calander-previous"></i>
                        </div>
                        <div class="btn next-btn">
                        <i class="fas fa-chevron-right calander-next"></i>
                        </div>
                    </div>
                    </div>
                    <div class="weekdays px-4">
                    <div class="day">Sun</div>
                    <div class="day">Mon</div>
                    <div class="day">Tue</div>
                    <div class="day">Wed</div>
                    <div class="day">Thu</div>
                    <div class="day">Fri</div>
                    <div class="day">Sat</div>
                    </div>
                    <div class="days px-4">
                    <!-- lets add days using js -->
                    </div>
                </div>
                <div class="calendar_footer p-4">
                    <div class="totalcountnotice"><span class="cale_dot notice_dot"></span> Notice:  <span id="totalcountNotice"></span></div>
                    <div class="totalcountnotice"><span class="cale_dot announcement_dot"></span> Announcement:  <span id="totalAnnouncement"></span></div>
                </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="shadow-sm shadow bg-white rounded-3 h-100">
            <div class="p-md-3 p-2 d-flex justify-content-between border-bottom">
                <h2 class="adTitle">Notices</h2>
                <a href="#">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3496 9.32166L17.5996 3.07166M17.5996 3.07166H13.4329M17.5996 3.07166V7.23832M17.5996 12.2383V16.405C17.5996 16.847 17.424 17.2709 17.1115 17.5835C16.7989 17.8961 16.375 18.0717 15.9329 18.0717H4.26628C3.82425 18.0717 3.40033 17.8961 3.08776 17.5835C2.7752 17.2709 2.59961 16.847 2.59961 16.405V4.73832C2.59961 4.29629 2.7752 3.87237 3.08776 3.55981C3.40033 3.24725 3.82425 3.07166 4.26628 3.07166H8.43294" stroke="#131313" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>

            <div class="p-md-4 p-2">
                @if(true)

                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="noticedes d-flex flex-wrap align-items-center list-complaint">
                            <a href="#" onclick="openNotice('4')">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.34375" y="0.571655" width="40" height="40" rx="5" fill="url(#paint0_linear_363_12937)"></rect>
                                    <path d="M19.5892 11.9493C14.9867 11.9493 11.2559 15.6802 11.2559 20.2827C11.2559 24.8852 14.9867 28.616 19.5892 28.616C24.1917 28.616 27.9225 24.8852 27.9225 20.2827C27.9225 15.6802 24.1917 11.9493 19.5892 11.9493ZM20.4225 24.4493H18.7559V22.7827H20.4225V24.4493ZM20.4225 21.116H18.7559L18.3392 16.116H20.8392L20.4225 21.116Z" fill="#FDFDFF"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_363_12937" x1="20.3438" y1="0.571655" x2="20.3438" y2="40.5717" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF4343"></stop>
                                            <stop offset="1" stop-color="#DC0000"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                            <span class="adm-notice ps-2">
                                <b>text</b>
                                By
                                  adarsh
                            </span>
                        </div>
                        <div class="d-flex">
                           <span class="cmp-date">test</span>
                        </div>
                    </div>
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <div class="noticedes d-flex flex-wrap align-items-center list-complaint">
                            <a href="#" onclick="openNotice('4')">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.34375" y="0.571655" width="40" height="40" rx="5" fill="url(#paint0_linear_363_12937)"></rect>
                                    <path d="M19.5892 11.9493C14.9867 11.9493 11.2559 15.6802 11.2559 20.2827C11.2559 24.8852 14.9867 28.616 19.5892 28.616C24.1917 28.616 27.9225 24.8852 27.9225 20.2827C27.9225 15.6802 24.1917 11.9493 19.5892 11.9493ZM20.4225 24.4493H18.7559V22.7827H20.4225V24.4493ZM20.4225 21.116H18.7559L18.3392 16.116H20.8392L20.4225 21.116Z" fill="#FDFDFF"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_363_12937" x1="20.3438" y1="0.571655" x2="20.3438" y2="40.5717" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FF4343"></stop>
                                            <stop offset="1" stop-color="#DC0000"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                            <span class="adm-notice ps-2">
                                <b>text</b>
                                By
                                  adarsh
                            </span>
                        </div>
                        <div class="d-flex">
                           <span class="cmp-date">test</span>
                        </div>
                    </div>

                @else
                    No data found.
                @endif
            </div>
        </div>
    </div>


    <div class="col-md-12 col-lg-12 col-xl-6 mb-4">
        <div class="shadow-sm shadow bg-white rounded-3 h-100">
            <div class="p-md-3 p-2 d-flex justify-content-between border-bottom">
                <h2 class="adTitle">Announcements</h2>
                 <a href="#">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.3496 9.32166L17.5996 3.07166M17.5996 3.07166H13.4329M17.5996 3.07166V7.23832M17.5996 12.2383V16.405C17.5996 16.847 17.424 17.2709 17.1115 17.5835C16.7989 17.8961 16.375 18.0717 15.9329 18.0717H4.26628C3.82425 18.0717 3.40033 17.8961 3.08776 17.5835C2.7752 17.2709 2.59961 16.847 2.59961 16.405V4.73832C2.59961 4.29629 2.7752 3.87237 3.08776 3.55981C3.40033 3.24725 3.82425 3.07166 4.26628 3.07166H8.43294" stroke="#131313" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </div>
            <div class="p-md-4 p-2">
             @if(true)

                    <div class="d-flex align-items-center justify-content-between mb-3 ">
                        <div class="d-inline-flex flex-wrap list-complaint">
                            <a href="#" onclick="openAnnoucement(' 2')">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.927734" y="0.571655" width="40" height="40" rx="5" fill="#00585E"/>
                                    <path d="M24.1067 11.6475C24.2674 11.6877 24.4057 11.79 24.491 11.9321C24.5763 12.0741 24.6017 12.2442 24.5617 12.405L24.2492 13.655C24.2309 13.7363 24.1965 13.8131 24.1481 13.8809C24.0998 13.9487 24.0383 14.0061 23.9674 14.0498C23.8965 14.0935 23.8176 14.1226 23.7353 14.1354C23.653 14.1482 23.5689 14.1444 23.4881 14.1242C23.4073 14.1041 23.3313 14.0679 23.2647 14.018C23.198 13.9681 23.142 13.9053 23.0999 13.8334C23.0579 13.7615 23.0306 13.6819 23.0197 13.5993C23.0089 13.5168 23.0146 13.4328 23.0367 13.3525L23.3492 12.1025C23.3893 11.9418 23.4917 11.8035 23.6337 11.7182C23.7758 11.6329 23.9459 11.6074 24.1067 11.6475ZM27.8354 13.0625C27.9526 13.1797 28.0184 13.3387 28.0184 13.5044C28.0184 13.6701 27.9526 13.8291 27.8354 13.9463L26.5854 15.1963C26.4682 15.3136 26.3092 15.3796 26.1433 15.3797C25.9775 15.3799 25.8184 15.3141 25.701 15.1969C25.5837 15.0797 25.5177 14.9207 25.5176 14.7548C25.5174 14.589 25.5832 14.4299 25.7004 14.3125L26.9504 13.0625C27.0085 13.0043 27.0774 12.9581 27.1534 12.9266C27.2293 12.8951 27.3107 12.8789 27.3929 12.8789C27.4751 12.8789 27.5565 12.8951 27.6324 12.9266C27.7084 12.9581 27.7773 13.0043 27.8354 13.0625ZM18.3729 26.67C18.6866 27.1923 19.1802 27.582 19.761 27.766C20.3418 27.95 20.9698 27.9156 21.527 27.6692C22.0842 27.4229 22.5323 26.9815 22.787 26.4281C23.0417 25.8747 23.0856 25.2473 22.9104 24.6638L18.3729 26.67ZM17.2229 27.1775L15.9754 27.73C15.6526 27.8726 15.2943 27.9143 14.9474 27.8496C14.6005 27.7849 14.2813 27.6169 14.0317 27.3675L13.5317 26.8688C13.2826 26.6208 13.1143 26.3033 13.049 25.958C12.9836 25.6126 13.0242 25.2556 13.1654 24.9338L18.0042 13.9238C18.1188 13.6638 18.295 13.4356 18.5176 13.259C18.7402 13.0824 19.0025 12.9626 19.2817 12.9101C19.561 12.8575 19.8488 12.8737 20.1204 12.9574C20.392 13.041 20.6391 13.1895 20.8404 13.39L27.5054 20.035C27.7062 20.2353 27.8551 20.4815 27.9392 20.7523C28.0234 21.0231 28.0402 21.3104 27.9882 21.5892C27.9363 21.868 27.8171 22.1299 27.641 22.3522C27.465 22.5745 27.2374 22.7505 26.9779 22.865L24.0592 24.155C24.3677 25.0442 24.3306 26.0169 23.9552 26.88C23.5798 27.7431 22.8936 28.4334 22.0327 28.814C21.1719 29.1946 20.1995 29.2376 19.3085 28.9344C18.4174 28.6313 17.673 28.0041 17.2229 27.1775ZM28.6429 16.6288H27.3929C27.2271 16.6288 27.0682 16.6946 26.951 16.8118C26.8337 16.929 26.7679 17.088 26.7679 17.2538C26.7679 17.4195 26.8337 17.5785 26.951 17.6957C27.0682 17.8129 27.2271 17.8788 27.3929 17.8788H28.6429C28.8087 17.8788 28.9676 17.8129 29.0848 17.6957C29.2021 17.5785 29.2679 17.4195 29.2679 17.2538C29.2679 17.088 29.2021 16.929 29.0848 16.8118C28.9676 16.6946 28.8087 16.6288 28.6429 16.6288Z" fill="#FDFDFF"/>
                                </svg>

                            </a>
                            <span class="complaintName d-inline-flex flex-wrap ps-2">
                                <b>test</b>
                                By:
                                        You

                            </span>
                        </div>
                        <div class="d-flex">
                            <span class="cmp-date">test</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3 ">
                        <div class="d-inline-flex flex-wrap list-complaint">
                            <a href="#" onclick="openAnnoucement(' 2')">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.927734" y="0.571655" width="40" height="40" rx="5" fill="#00585E"/>
                                    <path d="M24.1067 11.6475C24.2674 11.6877 24.4057 11.79 24.491 11.9321C24.5763 12.0741 24.6017 12.2442 24.5617 12.405L24.2492 13.655C24.2309 13.7363 24.1965 13.8131 24.1481 13.8809C24.0998 13.9487 24.0383 14.0061 23.9674 14.0498C23.8965 14.0935 23.8176 14.1226 23.7353 14.1354C23.653 14.1482 23.5689 14.1444 23.4881 14.1242C23.4073 14.1041 23.3313 14.0679 23.2647 14.018C23.198 13.9681 23.142 13.9053 23.0999 13.8334C23.0579 13.7615 23.0306 13.6819 23.0197 13.5993C23.0089 13.5168 23.0146 13.4328 23.0367 13.3525L23.3492 12.1025C23.3893 11.9418 23.4917 11.8035 23.6337 11.7182C23.7758 11.6329 23.9459 11.6074 24.1067 11.6475ZM27.8354 13.0625C27.9526 13.1797 28.0184 13.3387 28.0184 13.5044C28.0184 13.6701 27.9526 13.8291 27.8354 13.9463L26.5854 15.1963C26.4682 15.3136 26.3092 15.3796 26.1433 15.3797C25.9775 15.3799 25.8184 15.3141 25.701 15.1969C25.5837 15.0797 25.5177 14.9207 25.5176 14.7548C25.5174 14.589 25.5832 14.4299 25.7004 14.3125L26.9504 13.0625C27.0085 13.0043 27.0774 12.9581 27.1534 12.9266C27.2293 12.8951 27.3107 12.8789 27.3929 12.8789C27.4751 12.8789 27.5565 12.8951 27.6324 12.9266C27.7084 12.9581 27.7773 13.0043 27.8354 13.0625ZM18.3729 26.67C18.6866 27.1923 19.1802 27.582 19.761 27.766C20.3418 27.95 20.9698 27.9156 21.527 27.6692C22.0842 27.4229 22.5323 26.9815 22.787 26.4281C23.0417 25.8747 23.0856 25.2473 22.9104 24.6638L18.3729 26.67ZM17.2229 27.1775L15.9754 27.73C15.6526 27.8726 15.2943 27.9143 14.9474 27.8496C14.6005 27.7849 14.2813 27.6169 14.0317 27.3675L13.5317 26.8688C13.2826 26.6208 13.1143 26.3033 13.049 25.958C12.9836 25.6126 13.0242 25.2556 13.1654 24.9338L18.0042 13.9238C18.1188 13.6638 18.295 13.4356 18.5176 13.259C18.7402 13.0824 19.0025 12.9626 19.2817 12.9101C19.561 12.8575 19.8488 12.8737 20.1204 12.9574C20.392 13.041 20.6391 13.1895 20.8404 13.39L27.5054 20.035C27.7062 20.2353 27.8551 20.4815 27.9392 20.7523C28.0234 21.0231 28.0402 21.3104 27.9882 21.5892C27.9363 21.868 27.8171 22.1299 27.641 22.3522C27.465 22.5745 27.2374 22.7505 26.9779 22.865L24.0592 24.155C24.3677 25.0442 24.3306 26.0169 23.9552 26.88C23.5798 27.7431 22.8936 28.4334 22.0327 28.814C21.1719 29.1946 20.1995 29.2376 19.3085 28.9344C18.4174 28.6313 17.673 28.0041 17.2229 27.1775ZM28.6429 16.6288H27.3929C27.2271 16.6288 27.0682 16.6946 26.951 16.8118C26.8337 16.929 26.7679 17.088 26.7679 17.2538C26.7679 17.4195 26.8337 17.5785 26.951 17.6957C27.0682 17.8129 27.2271 17.8788 27.3929 17.8788H28.6429C28.8087 17.8788 28.9676 17.8129 29.0848 17.6957C29.2021 17.5785 29.2679 17.4195 29.2679 17.2538C29.2679 17.088 29.2021 16.929 29.0848 16.8118C28.9676 16.6946 28.8087 16.6288 28.6429 16.6288Z" fill="#FDFDFF"/>
                                </svg>

                            </a>
                            <span class="complaintName d-inline-flex flex-wrap ps-2">
                                <b>test</b>
                                By:
                                        You

                            </span>
                        </div>
                        <div class="d-flex">
                            <span class="cmp-date">test</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3 ">
                        <div class="d-inline-flex flex-wrap list-complaint">
                            <a href="#" onclick="openAnnoucement(' 2')">
                                <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.927734" y="0.571655" width="40" height="40" rx="5" fill="#00585E"/>
                                    <path d="M24.1067 11.6475C24.2674 11.6877 24.4057 11.79 24.491 11.9321C24.5763 12.0741 24.6017 12.2442 24.5617 12.405L24.2492 13.655C24.2309 13.7363 24.1965 13.8131 24.1481 13.8809C24.0998 13.9487 24.0383 14.0061 23.9674 14.0498C23.8965 14.0935 23.8176 14.1226 23.7353 14.1354C23.653 14.1482 23.5689 14.1444 23.4881 14.1242C23.4073 14.1041 23.3313 14.0679 23.2647 14.018C23.198 13.9681 23.142 13.9053 23.0999 13.8334C23.0579 13.7615 23.0306 13.6819 23.0197 13.5993C23.0089 13.5168 23.0146 13.4328 23.0367 13.3525L23.3492 12.1025C23.3893 11.9418 23.4917 11.8035 23.6337 11.7182C23.7758 11.6329 23.9459 11.6074 24.1067 11.6475ZM27.8354 13.0625C27.9526 13.1797 28.0184 13.3387 28.0184 13.5044C28.0184 13.6701 27.9526 13.8291 27.8354 13.9463L26.5854 15.1963C26.4682 15.3136 26.3092 15.3796 26.1433 15.3797C25.9775 15.3799 25.8184 15.3141 25.701 15.1969C25.5837 15.0797 25.5177 14.9207 25.5176 14.7548C25.5174 14.589 25.5832 14.4299 25.7004 14.3125L26.9504 13.0625C27.0085 13.0043 27.0774 12.9581 27.1534 12.9266C27.2293 12.8951 27.3107 12.8789 27.3929 12.8789C27.4751 12.8789 27.5565 12.8951 27.6324 12.9266C27.7084 12.9581 27.7773 13.0043 27.8354 13.0625ZM18.3729 26.67C18.6866 27.1923 19.1802 27.582 19.761 27.766C20.3418 27.95 20.9698 27.9156 21.527 27.6692C22.0842 27.4229 22.5323 26.9815 22.787 26.4281C23.0417 25.8747 23.0856 25.2473 22.9104 24.6638L18.3729 26.67ZM17.2229 27.1775L15.9754 27.73C15.6526 27.8726 15.2943 27.9143 14.9474 27.8496C14.6005 27.7849 14.2813 27.6169 14.0317 27.3675L13.5317 26.8688C13.2826 26.6208 13.1143 26.3033 13.049 25.958C12.9836 25.6126 13.0242 25.2556 13.1654 24.9338L18.0042 13.9238C18.1188 13.6638 18.295 13.4356 18.5176 13.259C18.7402 13.0824 19.0025 12.9626 19.2817 12.9101C19.561 12.8575 19.8488 12.8737 20.1204 12.9574C20.392 13.041 20.6391 13.1895 20.8404 13.39L27.5054 20.035C27.7062 20.2353 27.8551 20.4815 27.9392 20.7523C28.0234 21.0231 28.0402 21.3104 27.9882 21.5892C27.9363 21.868 27.8171 22.1299 27.641 22.3522C27.465 22.5745 27.2374 22.7505 26.9779 22.865L24.0592 24.155C24.3677 25.0442 24.3306 26.0169 23.9552 26.88C23.5798 27.7431 22.8936 28.4334 22.0327 28.814C21.1719 29.1946 20.1995 29.2376 19.3085 28.9344C18.4174 28.6313 17.673 28.0041 17.2229 27.1775ZM28.6429 16.6288H27.3929C27.2271 16.6288 27.0682 16.6946 26.951 16.8118C26.8337 16.929 26.7679 17.088 26.7679 17.2538C26.7679 17.4195 26.8337 17.5785 26.951 17.6957C27.0682 17.8129 27.2271 17.8788 27.3929 17.8788H28.6429C28.8087 17.8788 28.9676 17.8129 29.0848 17.6957C29.2021 17.5785 29.2679 17.4195 29.2679 17.2538C29.2679 17.088 29.2021 16.929 29.0848 16.8118C28.9676 16.6946 28.8087 16.6288 28.6429 16.6288Z" fill="#FDFDFF"/>
                                </svg>

                            </a>
                            <span class="complaintName d-inline-flex flex-wrap ps-2">
                                <b>test</b>
                                By:
                                        You

                            </span>
                        </div>
                        <div class="d-flex">
                            <span class="cmp-date">test</span>
                        </div>
                    </div>

                @else
                    No data found.
                @endif

            </div>
        </div>
    </div>
</div>



@endsection

@push('footer-script')
<script>
    function submitForm() {
        $("#filter-form").submit();
    }
    function submitresidentForm() {
        $("#filter-form1").submit();
    }
</script>
<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>




@endpush
