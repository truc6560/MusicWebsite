<x-book-layout>
    <x-slot name="title">
        Chi tiết sách
    </x-slot> 

    <style>
        .info {
            display: grid;
            /* Sửa lại dòng này thành cú pháp chuẩn */
            grid-template-columns: 30% 70%; 
            gap: 20px;
            margin-bottom: 20px;
        }
        .description {
            margin-top: 20px;
            line-height: 1.6;
        }
    </style>

    <h4>{{ $data->tieu_de }}</h4>

    <div class='info'>
        <div>
            {{-- Kiểm tra lại đường dẫn images/ hay image/ cho khớp với trang index --}}
            <img src="{{ asset('image/'.$data->file_anh_bia) }}" width="200px" height="200px">
        </div>
        <div>
            Nhà cung cấp: <b>{{ $data->nha_cung_cap }}</b><br>
            Nhà xuất bản: <b>{{ $data->nha_xuat_ban }}</b><br>
            Tác giả: <b>{{ $data->tac_gia }}</b><br>
            Hình thức bìa: <b>{{ $data->hinh_thuc_bia }}</b><br>
            Giá bán: <b style="color:red">{{ number_format($data->gia_ban, 0, ",", ".") }}đ</b>
        </div>
    </div>

    <div class='row description'>
        <div class='col-sm-12'>
            <b>Mô tả:</b><br>
            {{ $data->mo_ta }}
        </div>
    </div>
</x-book-layout>