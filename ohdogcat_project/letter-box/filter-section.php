<hr class="m-0">
<div class="d-flex justify-content-between align-items-center mt-3 pt-3 roww-100">
        <div class="col-6">
            <div class="row">
                <div class="col-auto d-flex align-items-center">
                    <h5 class="m-0">用戶搜尋</h5>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" placeholder="請輸入關鍵字">
                </div>
                <div class="col-auto">
                    <button type="button" class="btn filterBtn">搜尋</button>
                </div>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="./?order=1" class="orderBtn col-3 <?php if($order==1) echo "active" ?>">回覆時間↑</a>
            <a href="./?order=2" class="orderBtn col-3 <?php if($order==2) echo "active" ?>">回覆時間↓</a>
            <a href="./?order=3" class="orderBtn col-2 <?php if($order==3) echo "active" ?>">未回覆↓</a>
            <a href="./?order=4" class="orderBtn col-2 <?php if($order==4) echo "active" ?>">已回覆↓</a>
        </div>
</div>
<div class="d-flex justify-content-end align-items-center mb-3 pb-3">
        <div class="countBox">
            <h4 class="countBox">共 <?= $UserIdCount; ?> 筆</h4>
        </div>
    </div>