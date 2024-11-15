<div class="admin-right-wrapper">
    <div class="top-header">
        <h2> <button class="mobile-toggler-btn d-block d-lg-none">
            <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1.5C0 0.671573 0.671573 0 1.5 0H25.5C26.3284 0 27 0.671573 27 1.5V1.5C27 2.32843 26.3284 3 25.5 3H1.5C0.671574 3 0 2.32843 0 1.5V1.5ZM0 9C0 8.17157 0.671573 7.5 1.5 7.5H18C18.8284 7.5 19.5 8.17157 19.5 9V9C19.5 9.82843 18.8284 10.5 18 10.5H1.5C0.671573 10.5 0 9.82843 0 9V9ZM0 16.5C0 15.6716 0.671573 15 1.5 15H25.5C26.3284 15 27 15.6716 27 16.5V16.5C27 17.3284 26.3284 18 25.5 18H1.5C0.671574 18 0 17.3284 0 16.5V16.5Z" fill="#262626"></path>
            </svg>
        </button>
            @if ($pageTitle)
                <span class="{{ $activeClass }}">{{ $pageTitle }}</span>
            @endif
            @if (Auth::guard('admin')->check())
                <?php
                $user = Auth::guard('admin')->user();
                $superId = $user->id;
                $superName = $user->name;
                $superEmail = $user->email;
                ?>
            @endif

        </h2>

            <div class="right-header">
                {{-- <div class="township_view">
                    @if (session()->has('globalTownId'))
                       @php
                            $town_id = session('globalTownId');
                            $Town = App\Models\Town::where('id', $town_id)->first();
                        @endphp

                        @if ($Town)
                        <span><strong>Township :</strong> {{ $Town->town_name }}</span>
                        @endif
                    @endif
                    @if (session()->has('globalresidentId'))
                       @php
                            $resident_id = session('globalresidentId');
                            $resident = App\Models\Resident::where('id', $resident_id)->first();
                        @endphp

                        @if ($resident)
                        | <span><strong>Resident :</strong> {{ $resident->residentUnit_number }}</span>
                        @endif

                    @endif
                </div> --}}
                <ul>
                    <li>
                        <div class="header-notifications position-relative dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.2898 14.9354L19.1598 13.0554C18.9098 12.6454 18.6898 11.8554 18.6898 11.3754V9.50537C18.6898 5.87537 15.7398 2.92537 12.1198 2.92537C8.48981 2.93537 5.53981 5.87537 5.53981 9.50537V11.3654C5.53981 11.8454 5.31981 12.6354 5.07981 13.0454L3.94981 14.9254C3.51981 15.6554 3.41981 16.4854 3.68981 17.2054C3.95981 17.9354 4.56981 18.5154 5.36981 18.7754C6.44981 19.1354 7.53981 19.3954 8.64981 19.5854C8.75981 19.6054 8.86981 19.6154 8.97981 19.6354C9.11981 19.6554 9.26981 19.6754 9.41981 19.6954C9.67981 19.7354 9.93981 19.7654 10.2098 19.7854C10.8398 19.8454 11.4798 19.8754 12.1198 19.8754C12.7498 19.8754 13.3798 19.8454 13.9998 19.7854C14.2298 19.7654 14.4598 19.7454 14.6798 19.7154C14.8598 19.6954 15.0398 19.6754 15.2198 19.6454C15.3298 19.6354 15.4398 19.6154 15.5498 19.5954C16.6698 19.4154 17.7798 19.1354 18.8598 18.7754C19.6298 18.5154 20.2198 17.9354 20.4998 17.1954C20.7798 16.4454 20.6998 15.6254 20.2898 14.9354ZM12.8498 10.8754C12.8498 11.2954 12.5098 11.6354 12.0898 11.6354C11.6698 11.6354 11.3298 11.2954 11.3298 10.8754V7.77537C11.3298 7.35537 11.6698 7.01537 12.0898 7.01537C12.5098 7.01537 12.8498 7.35537 12.8498 7.77537V10.8754Z"
                                        fill="#131313"></path>
                                    <path
                                        d="M14.9293 20.8854C14.5093 22.0454 13.3993 22.8754 12.0993 22.8754C11.3093 22.8754 10.5293 22.5554 9.9793 21.9854C9.6593 21.6854 9.4193 21.2854 9.2793 20.8754C9.4093 20.8954 9.5393 20.9054 9.6793 20.9254C9.9093 20.9554 10.1493 20.9854 10.3893 21.0054C10.9593 21.0554 11.5393 21.0854 12.1193 21.0854C12.6893 21.0854 13.2593 21.0554 13.8193 21.0054C14.0293 20.9854 14.2393 20.9754 14.4393 20.9454C14.5993 20.9254 14.7593 20.9054 14.9293 20.8854Z"
                                        fill="#131313"></path>
                                </svg>
                                <span class="notinum position-absolute">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1">
                                <div class="header_noti">Notifications</div>
                                <div class="body_noti">
                                    <ul>
                                        <li>
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ url('public/superadmin/img/profile_img.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <span class="time">2 days</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ url('public/superadmin/img/profile_img.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <span class="time">2 days</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ url('public/superadmin/img/profile_img.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <span class="time">2 days</span>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="notify_thumb">
                                                <a href="#"><img src="{{ url('public/superadmin/img/profile_img.png') }}" alt=""></a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#"><h5>Cool Marketing </h5></a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <span class="time">2 days</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="footer_noti">
                                    <a href="#" class="btn_1">See More</a>
                                </div> --}}
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="header-profile">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if($user->image)
                                        <span class="user_pic"> <img src="{{ asset('public/staff/' . $user->image) }}" class="img" alt="Admin Image"/></span>
                                    @else
                                    <span class="user_pic"> <img src="{{ url('admin/img/profileimage.jpg') }}" class="img" /> </span>
                                    @endif
                                    <span class="userprodrop">
                                        <strong>{{ $superName }}</strong>
                                        <span>Admin</span>
                                    </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <div class="top_info">
                                            <span class="name">{{ $superName }}</span>
                                            <span class="mailid">{{ $superEmail }}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Profile
                                            Settings</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('admin.dashboard') }}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
    </div>




