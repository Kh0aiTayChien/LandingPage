<div>
    <button class="btn-default dark-blue rounded-pill pos1" style="width: 180px" type="button">Đăng ký tư vấn</button>
</div>

<!-- Button trigger modal -->
<div>
    <button type="button" class=" btn-default rounded-pill pos2 text-dark-blue" style="width: 270px"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Dùng thử 30 ngày
        miễn phí
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dùng thử 30 ngày
                    miễn phí</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Họ và tên</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Họ tên">
                    </div>
                    <div class="mb-3">
                        <div class="float-lg-start col-6 pe-3">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="email" class="form-control " id="recipient-name" placeholder="Email">
                        </div>
                        <div class="float-lg-end col-6 ps-2">
                            <label for="message-text" class="col-form-label">Số điện thoại:</label>
                            <input type="tel" class="form-control" id="recipient-name" placeholder="sđt">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Ghi chú:</label>
                        <input type="text" class="form-control note placeholder" id="recipient-name" placeholder="Nhập nội dung của bạn">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

<div><img class="img1" src="{{asset('/anh/1.png')}}"></div>


