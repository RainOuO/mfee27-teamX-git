<!doctype html>
<html lang="en">

<head>
    <title><?=$title?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="cache-control" content="no-cache">
    

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$path?>template/css/custom-bs.css">
    <link rel="stylesheet" href="<?=$path?>template/css/style.css">
    <link rel="stylesheet" href="<?= $css ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="../images/store_photo/Sample_User_Icon.svg" type="image/x-icon"/>


</head>

<body>
    <div class="lowest-background w-100 vh-100 d-flex  overflow-hidden">
        <aside id="side-bar" class="side-wrap vh-100 d-flex flex-column">
            <div class="logo-box d-flex justify-content-center align-items-center py-2">
                <a href="../dashboard/" class="fill-w d-block px-4">
                    <img class="img-component dog-body" src="../images/dashboard/logo_dog-body.svg" class="fill-w"
                        alt="">
                    <img class="img-component dog-tail" src="../images/dashboard/logo_dog-tail.svg" class="fill-w"
                        alt="">
                    <img class="img-component dog-text" src="../images/dashboard/logo_dog-text.svg" class="fill-w"
                        alt="">
                </a>
            </div>
            <nav class="menu-box mt-2 overflow-auto flex-shrink-1 h-100">
                <ul class="list-unstyled accordion" id="menu-accordion">
                    <li class="menu-item">
                        <a href="../dashboard/" class="menu-button icon-home no-accordion <?=($current == 'dashboard')?'current-active':'';?>">狀態總覽</a>
                    </li>
                    <li class="menu-item accordion-header">
                        <button class="menu-button icon-products accordion-button <?=($current == 'products')?'current-active':'collapsed';?>"
                            data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="true"
                            aria-controls="collapseProducts">商品管理
                            <div class="status-mark"></div>
                        </button>
                        <div id="collapseProducts" class="accordion-collapse <?=($current == 'products')?'show':'collapse';?>" data-bs-parent="#menu-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <?php if(count($typeData)>1):?>
                                        <!-- 總覽 -->
                                    <?php endif;?>
                                    <?php for($i=0; $i<count($typeData); $i++): $index = $i+1; ?>
                                        <li>
                                            <a href="<?=$typeData[$i]['href']?>" class="menu-link <?=($current == 'products'&& $pageType == $typeData[$i]['type'])?'current-active':'';?>"><?=$typeData[$i]['text']?></a>
                                        </li>
                                    <?php endfor;?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="../order-list/" class="menu-button icon-orderlist no-accordion <?=($current == 'order-list')?'current-active':'';?>">訂單管理</a>
                    </li>
                    <li class="menu-item accordion-header">
                        <button class="menu-button icon-message accordion-button <?=($current == 'letter-box')?'current-active':'collapsed';?>"
                            data-bs-toggle="<?=($current == 'letter-box')?'current-active':'collapse';?>" data-bs-target="#collapseMessages" aria-expanded="true"
                            aria-controls="collapseMessages">信件匣
                            <div class="status-mark"></div>
                        </button>
                        <div id="collapseMessages" class="accordion-collapse <?=($current == 'letter-box')?'show':'collapse';?>" data-bs-parent="#menu-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="../letter-box/" class="menu-link <?=($current == 'letter-box'&& $pageType === '0')?'current-active':'';?>">所有信件</a>
                                    </li>
                                    <li>
                                        <a href="../letter-box/?type=1" class="menu-link <?=($current == 'letter-box'&& $pageType == '1')?'current-active':'';?>">系統信件列表</a>
                                    </li>
                                    <li>
                                        <a href="../letter-box/?type=2" class="menu-link <?=($current == 'letter-box'&& $pageType == '2')?'current-active':'';?>">顧客信件列表</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item accordion-header">
                        <button class="menu-button icon-coupon accordion-button <?=($current == 'discount')?'current-active':'collapsed';?>"
                            data-bs-toggle="collapse" data-bs-target="#collapseCoupon" aria-expanded="true"
                            aria-controls="collapseCoupon">優惠管理
                            <div class="status-mark"></div>
                        </button>
                        <div id="collapseCoupon" class="accordion-collapse collapse <?=($current == 'discount')?'show':'';?>" data-bs-parent="#menu-accordion">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="../discounts" class="menu-link <?=($current == 'discount'&& $pageType == '1')?'current-active':'';?>">折扣碼優惠券</a>
                                    </li>
                                    <li>
                                        <a href="../store-discounts" class="menu-link <?=($current == 'discount'&& $pageType == '2')?'current-active':'';?>">商品優惠活動</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="../store-info/" class="menu-button icon-setting no-accordion <?=($current == 'store-info')?'current-active':'';?>">商家設定</a></li>
                </ul>
            </nav>
            <div class="menu-box mt-2 flex-shrink-0 logout">
                <div class="menu-item"><a id="logout" class="menu-button no-accordion icon-logout" style="cursor: pointer;">粗企玩</a></div>
            </div>
        </aside>
        <div class="content-wrap vh-100">
            <div class="container-fluid h-100 py-3 overflow-hidden">
                <div class="d-flex flex-column h-100">
                    <div class="content-header d-flex justify-content-end mb-3">
                        <div class="d-flex flex-shrink-1 w-100 align-items-center">
                            <?php if($header){ require($header);}?>
                        </div>
                        <a href="../store-info/" class="d-flex justify-content-end align-items-center flex-shrink-0">
                            <div class="user-name pe-4"><?=$userNickName?></div>
                            <div class="user-sticker rounded-3 overflow-hidden border border-1 p-1 bg-white"><img
                                    src="../images/store_photo/<?=$userPhoto?>" class="fill-w object-fit" alt=""></div>
                        </a>
                    </div>
                    <div id="button-area">
                        <?php if($filterSection){ require($filterSection);} ?>
                    </div>
                    <main id="main" class="content-main flex-shrink-1 h-100 scroll-bar">
                        <?php require($main)?>
                    </main>
                    <div class="content-footer flex-shrink-1">
                        <?php if($footer){ require($footer);}?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="<?=$path?>template/js/main.js?<?=$time?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="<?=$js?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        // activeBtn event.preventDefault()
        let activeBtn = document.getElementsByClassName('current-active');
        let logoutBtn = document.querySelector('#logout')
        logoutBtn.addEventListener('click', function(e){
            e.preventDefault();
            Swal.fire({
            title: '確定要登出嗎？',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: 'grey',
            cancelButtonText:'我按錯了我是笨蛋',
            confirmButtonText: '確定'
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href = '../login/doLogout.php';
            } else if (result.isDenied) {
            }
            })
        });
        for(let i=0; i<activeBtn.length; i++) {
            activeBtn[i].onclick = function (event) {
                event.preventDefault();
            }
        }

        let checkStoreRight = <?=($checkStoreRight)?'true':'false'?>;
        if(checkStoreRight) {
            let id = <?=$id?>;
            popup(id);
        }

        function popup(id, text){
            Swal.fire({
                title: `<strong class="lh-base"">初次登入<br>請選擇要開通的權限</strong>${(text)? text:'' }`,
                icon: 'info',
                html:
                    `<select id="storeRight" class="form-select" aria-label="Default select example">
                    <option selected> -- 權限選擇 -- </option>
                    <option value="1">旅遊票券</option>
                    <option value="2">餐廳票券</option>
                    <option value="3">活動票券</option>
                    <option value="4">實體商品</option>
                    </select>`,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText:'送出'
            }).then((result) => {
            if (result.isConfirmed) {
                let storeRight = document.querySelector('#storeRight').value;
                storeRightUpdate(id, storeRight);
            } else if (Swal.DismissReason.backdrop) {
                popup(id,'<br><p class="text-danger fs-6 pt-2">此步驟無法跳過</p>');
            }
            })
        }

        function storeRightUpdate (id, storeRight){
            $.ajax({
                    method: "POST",
                    url: `../api/store-right-update.php`,
                    dataType: "json",
                    data: {
                        action: 'update',
                        id: id,
                        store_right: storeRight
                    }
                }).done(function (response) {
                    if(response.success){
                        Swal.fire({
                            icon: 'success',
                            title: '成功',
                            text: `已為你開通${response.data.store_right}`,
                            confirmButtonText:'確認'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.assign(window.location.href);
                        } else if (Swal.DismissReason.backdrop) {
                            popup(id,'<br><p class="text-danger fs-6 pt-2">此步驟無法跳過</p>');
                        }
                });
                    }else{
                        popup(id,`<br><p class="text-danger fs-6 pt-2">${response.message}</p>`)
                    }
                    
                }).fail(function (jqXHR, textStatus) {
                    console.log("Request failed: " + textStatus);
                });
        }
    </script>
</body>

</html>