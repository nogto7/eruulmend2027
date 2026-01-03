<div class="section_line sl_other">
    <h1 class="title">Санал, хүсэлт</h1>
    <div class="sub_title">Салбарынхаа тулгамдсан асуудал, шинэ санаачилга, <br>бүтээлч шийдлийг бидэнтэй хуваалцаарай.</div>
    <div class="feedback_form">
        <form action="{{ route('feedback.send') }}" method="POST">
            @csrf
            <div class="dg g2 gap1_2">
                <div class="form_item required">
                    <label class="form_label">Нэр</label>
                    <input type="text" name="name" class="form_input" id="" required>
                    @if ($errors->has('name'))
                        <div class="text_desc">
                            <p class="__error">{{ $errors->first('name') }}</p>
                        </div>
                    @endif
                </div>
                <div class="form_item required">
                    <label class="form_label">Утасны дугаар</label>
                    <input type="text" name="phone" class="form_input" id="" required>
                    @if ($errors->has('phone'))
                        <div class="text_desc">
                            <p class="__error">{{ $errors->first('phone') }}</p>
                        </div>
                    @endif
                </div>
                <div class="col2to1">
                    <div class="form_item required">
                        <label class="form_label">И-мэйл хаяг</label>
                        <input type="email" name="email" class="form_input" id="" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <div class="text_desc">
                                <p class="__error">{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col2to1">
                    <div class="form_item required">
                        <label class="form_label">Саналын төрөл</label>
                        <select name="feedback_type" class="form_select" id="">
                            <option value="">Сонгох</option>
                            <option value="Цалин урамшуулал">Цалин урамшуулал</option>
                            <option value="Хүний нөөцийн сургалт хөгжил">Хүний нөөцийн сургалт хөгжил</option>
                            <option value="Цахимжилт, тайлан">Цахимжилт, тайлан</option>
                            <option value="Эрүүл мэндийн даатгал">Эрүүл мэндийн даатгал</option>
                            <option value="Нийгмийн эрүүл мэнд">Нийгмийн эрүүл мэнд</option>
                        </select>
                    </div>
                </div>
                <div class="col2to1">
                    <div class="form_item required">
                        <label class="form_label">Санал, шийдлийн дэлгэрэнгүй</label>
                        <textarea name="message" class="form_textarea" id=""></textarea>
                        @if ($errors->has('message'))
                            <div class="text_desc">
                                <p class="__error">{{ $errors->first('message') }}</p>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="em_button btn_second mt4">Санал илгээх</button>
                </div>
            </div>
        </form>
    </div>
</div>