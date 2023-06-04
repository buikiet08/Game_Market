<link rel="stylesheet" href="{{ asset('assets/css/layout/header.css') }}">

<nav class="heading">

    <div class="container c-container header-container">
        <div class="box-logo ">
            <a href="/">
                <img src="//cdn.upanh.info/storage/upload/images/Logo%20shop/LOGO-SHOPLQ-VN.png" alt="" class="d-lg-block d-none">
                <img src="//cdn.upanh.info/storage/upload/images/Logo%20shop/LOGO-SHOPLQ-VN.png" alt="" class="d-lg-none">
            </a>
        </div>
        <div class="d-none d-lg-flex h-100">
            <div class="box-menu c-mr-16 c-py-10">
                <div class="box-menu-bar  " style="">
                    <div class="box-icon brs-8 c-mr-8">
                        <img src="{{ asset('assets/image/layout/menu.svg') }}" alt="">
                    </div>
                    <span class="lh-40 box-icon-text fw-700">Danh mục</span>
                </div>


                <div class="menu-list ">

                    <div class="menu-category ">
                        <div class="container c-container">
                            <ul class="d-flex justify-content-between px-0">
                                <li class="w-100 c-px-4">
                                    <a href="">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%205.0/home.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Trang chủ</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-100 c-px-4">
                                    <a href="/nap-the">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%205.0/napthe.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Nạp thẻ</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-100 c-px-4">
                                    <a href="/recharge-atm">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%205.0/napviatm.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Nạp ATM</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-100 c-px-4">
                                    <a href="/mua-acc">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%205.0/shopacc.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Mua Acc</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-100 c-px-4">
                                    <a href="/minigame">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%202.0/menu%20trang%20chu/vongquay.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Mini Game</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-100 c-px-4">
                                    <a href="/tin-tuc">
                                        <div class="c-p-8 brs-8   d-flex justify-content-center" style="white-space: nowrap;">
                                            <div>
                                                <img src="//cdn.upanh.info/storage/upload/images/Library-SVG/Theme%205.0/tintuc.svg" alt="" class="c-pr-4">
                                            </div>

                                            <span class="fw-500 fz-15 lh-24 ">Tin tức</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>




                </div>
            </div>
            <div class="box-sale d-flex c-py-10">
                <div class="box-icon brs-8 c-mr-8" data-notity="5">
                    <img src="{{ asset('assets/image/layout/sale.svg') }}" alt="">
                </div>
                <span class="lh-40 box-icon-text fw-700">Khuyến mãi</span>

            </div>
        </div>

        <div class="box-search d-none d-lg-block ">
            <form action="" class="form-search" id="formSearchHeader">
                <input type="search" placeholder="Tìm kiếm" class=" has-submit">
                <button type="submit"></button>
            </form>
        </div>
        <div class="d-flex">
            <a class="btn primary handle-recharge-modal c-px-xl-20 c-px-34 c-mr-16 d-none d-lg-block" href="javascript:void(0)" data-tab="1">Nạp tiền</a>
            <div class="box-search_mobile" style="display: none;">
                <div class="box-notify ">
                    <div class="box-icon brs-8 ">
                        <img src="{{ asset('assets/image/layout/search.svg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="box-notify  d-flex ">
                <div class="box-icon brs-8 " data-notity="5">
                    <img src="{{ asset('assets/image/layout/ring.svg') }}" alt="">
                </div>
            </div>

            <div class="box-account c-ml-16 d-none d-md-block position-relative">
                <div class="box-loading btn-loading" style="display: none;">
                    <div class="loading">
                        <div class="loading-child"></div>
                    </div>
                </div>
                <div class="account-logined box-account-open">
                    <div class="d-flex ">
                        <div class="account-name">
                            <div class="text-right title-color fw-500">Phùng Thành ...</div>
                            <div class="account-balance fw-400">Số dư: 0</div>
                        </div>
                        <div class="account-avatar c-ml-12"><img src="{{ asset('assets/image/layout/anhdaidien.svg') }}" alt=""></div>
                    </div>
                </div>
                <div class="box-account-logined position-absolute brs-12" style="display: none;">

                    <div class="box-account-title d-flex justify-content-between c-mb-18">
                        <div class="fw-700 fz-20 lh-28 title-color">Tài khoản</div>
                        <img src="{{ asset('assets/image/layout/profile_close.svg') }}" alt="" class="close-login-popup c-mr-12">
                    </div>
                    <div class="c-pr-16 account-logined-content box-account_nologined" style="display: none;">
                        <div class="login-popup brs-12 c-p-16 d-flex m-auto justify-content-between">
                            <div class="m-auto ">
                                <img src="{{ asset('assets/image/layout/login-robot.png') }}" alt="">
                            </div>

                            <div class="login-popup_content c-ml-24">
                                <div class="text-secondary-color fw-700 lh-28 fz-20">
                                    Nick.vn xin chào!
                                </div>
                                <div class="fw-400 c-mt-4">Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi</div>
                                <button class="btn primary w-100 c-mt-12" onclick="openLoginModal()">Đăng nhập</button>
                                <div class="c-mt-10">Bạn chưa có tài khoản? <a href="#" onclick="openRegisterModal()" class="text-primary-color fw-500 underline" style="text-decoration: underline">Đăng ký</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="account-logined-content c-pr-4 box-account_logined" style="display: block;">

                        <div class="sidebar">
                            <div class="sidebar-section d-flex brs-12 c-mb-16 sidebar-user-profile">
                                <div class="sidebar-section-avt brs-100 c-mr-12"><img class="brs-100" src="{{ asset('assets/image/layout/avatar.png') }}" alt=""></div>
                                <div class="sidebar-section-info">
                                    <div class="sidebar-section-title c-mb-4 fz-15 fw-500">Phùng Thành ...</div>
                                    <div class="sidebar-section-info-text c-mb-4 fz-13 fw-500 sidebar-user-balance">Số dư: <span>0</span></div>
                                    <p class="sidebar-section-info-text mb-0 fz-13 fw-500 sidebar-user-id">ID: <span>1176519</span></p>
                                </div>
                            </div>
                            <!-- Nhóm vào với các item vào với nhau theo parent -->
                            <!-- Tìm parent trước -->
                            <div class="sidebar-section brs-12 c-mb-16">
                                <p class="sidebar-section-title fz-15 fw-500 c-mb-16">MENU GIAO DỊCH</p>
                            </div>
                            <!-- Tìm parent trước -->
                            <div class="sidebar-section brs-12 c-mb-16">
                                <div class="sidebar-item ">
                                    <a href="/thong-tin" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url({{ asset('assets/image/layout/thongtintaikhoan.svg') }})"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Thông tin tài khoản</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/changepassword" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/doimatkhau.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Đổi mật khẩu</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Tìm parent trước -->
                            <div class="sidebar-section brs-12 c-mb-16">
                                <p class="sidebar-section-title c-mb-16 fz-15 fw-500">Quản lý giao dịch</p>
                                <div class="d-flex justify-content-between transaction-manager">
                                    <div class="sidebar-item sidebar-item-col ">
                                        <a href="/nap-the" class=" d-flex flex-column align-items-center">
                                            <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/naptien.svg)"></div>
                                            <div class="sidebar-transaction-item-text fw-400 fz-12 mb-0">Nạp tiền</div>
                                        </a>
                                    </div>
                                    <div class="sidebar-item sidebar-item-col ">
                                        <a href="/withdrawitem-2" class=" d-flex flex-column align-items-center">
                                            <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/rutvatpham.svg)"></div>
                                            <div class="sidebar-transaction-item-text fw-400 fz-12 mb-0">Rút vật phẩm</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tìm parent trước -->
                            <div class="sidebar-section brs-12 c-mb-16">
                                <p class="sidebar-section-title fz-15 fw-500 c-mb-16">LỊCH SỬ GIAO DỊCH</p>
                                <div class="sidebar-item ">
                                    <a href="/lich-su-giao-dich" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/biendongsodu.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Biến động số dư</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/dich-vu-da-mua" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url()"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Dịch vụ đã mua</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/lich-su-mua-account" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/taikhoandamua.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Tài khoản đã mua</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/minigame-log" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/lichsuquaythuong.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Lịch sử chơi minigame</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/lich-su-nap-the" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/lichsunapthe.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Lịch sử nạp thẻ</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="sidebar-item-partition d-flex c-my-8"></div>
                                <div class="sidebar-item ">
                                    <a href="/lich-su-atm-tu-dong" class="d-block align-items-center d-flex">
                                        <div class="icon-sidebar" style="--path:url(https://cdn.upanh.info/storage/upload/images/Library-SVG/Theme%203.0/menu%20profile/napatmtudong.svg)"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Lịch sử nạp ATM tự động</p>
                                        <img src="{{ asset('assets/image/layout/sidebar_arrow_right.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-section brs-12 c-mb-16">
                                <div class="sidebar-item log-out-button"><a href="javascript:void(0);" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="d-block align-items-center d-flex">
                                        <div class="sidebar-item-icon brs-8 c-p-8 c-mr-12"><img src="https://shoplq.vn/assets/frontend/theme_5/image/nam/log-out.svg" alt="" style="width: 24px;height: 24px"></div>
                                        <p class="sidebar-item-text fw-400 fz-12 mb-0">Đăng xuất</p>
                                    </a></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</nav>