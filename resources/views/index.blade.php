@extends('layout')
@section('content')
<header>
    <div class="header_slider">
        <div class="slider_content dg gap5">
            <div class="sc_big">
                <h1>"Эрүүл мэндийг дэмжих жил - 2027"</h1>
                <p>Эрүүл мэндийн салбарын хөгжлийн гарцад хамтдаа анхаарлаа хандуулж, эмч эмнэлгийн ажилчдын дуу хоолойг сонсоцгооё.</p>
            </div>
            <div class="sc_r">
                <div class="sc_item">
                    <h2>2025</h2>
                    <span>байдлаар</span>
                </div>
                <div class="sc_item">
                    <h2>~2.8-3%</h2>
                    <span>ДНБ</span>
                </div>
                <div class="sc_item">
                    <h2>~5%</h2>
                    <span>ДНБ - 2027 онд</span>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="section_container">
        <div class="section_line">
            <h1 class="title">Эрүүл мэндийг <br>дэмжих жил</h1>
            <div class="gdp_line">
                <div class="marquee-controls">
                    <button id="marquee-toggle" data-state="playing">
                    ⏸ Зогсоох
                    </button>
                </div>
                <div class="marquee-wrapper">
                    <div class="marquee-row" data-speed="0.2" data-direction="left">
                        <div class="marquee-track">
                            <span>Эрүүл мэндийн чанартай тусламж, үйлчилгээ</span>
                            <span>Сэтгэл ханамжтай эмч, эмнэлэгийн мэргэжилтнүүд</span>
                            <span>Ухаалаг цахим шийдэл</span>
                            <span>Эм, эмнэлэгийн хэрэгсэл</span>
                            <span>Эрүүл мэндийн санхүүжилт</span>
                            <span>Манлайлал, эмнэлэгийн менежерүүд</span>                           
                        </div>
                    </div>
                </div>
                <div class="svg_board">
                    <img src="{{ asset('images/GDP_bg1.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="section_line sl_other">
            <h1 class="title">Зорилго <br><strong>санаачилга</strong></h1>
            <div class="sub_title">2026 онд хийж хэрэгжүүлэх үйл ажиллагаа</div>
            <div class="dg goal_grid">
                <div class="gl_col">
                    <div class="gl_cat_head">
                        <h2>Салбарын бодит хэрэгцээг тандах</h2>
                        <span>5 тандалт</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
                <div class="gl_line"></div>
                <div class="gl_col">
                    <div class="gl_cat_head">
                        <h2>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</h2>
                        <span>5 тандалт</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
                <div class="gl_line second"></div>
                <div class="gl_col">
                    <div class="gl_cat_head">
                        <h2>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</h2>
                        <span>5 тандалт</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
                <div class="gl_line horiz"></div>
                <div class="gl_col hbtm">
                    <div class="gl_cat_head">
                        <h2>Эмч, эмнэлгийн ажилчдын нээлттэй хэлэлцүүлэг</h2>
                        <span>2026.03</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
                <div class="gl_line three"></div>
                <div class="gl_col hbtm">
                    <div class="gl_cat_head">
                        <h2>Шилдэг санаачилгыг дэмжих тэтгэлэг</h2>
                        <span>2026.06</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
                <div class="gl_line"></div>
                <div class="gl_col hbtm">
                    <div class="gl_cat_head">
                        <h2>Салбарын шинэчлэлийн тайлан, зөвлөмж</h2>
                        <span>2026.08</span>
                    </div>
                    <div class="gl_cat_main">
                        <ul>
                            <li>Салбарын бодит хэрэгцээг тандах</li>
                            <li>Шинэлэг, нотолгоонд суурилсан санал санаачилгыг дэмжих</li>
                            <li>Эрүүл мэндийн өгөгдөл, цахим шилжилтийг түргэвчлэх</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_line sl_other">
            <h1 class="title">Ирсэн санал хүсэлт</h1>
            <div class="sub_title">Таны явуулсан санал эрүүл мэндийн салбарын <br>өөрчлөлтөд хувь нэмрээ оруулах болно</div>
            <div class="feedback_result">
                <div class="dg g5 gap3">
                    @php
                        $types = [
                            'Цалин урамшуулал',
                            'Хүний нөөцийн сургалт хөгжил',
                            'Цахимжилт, тайлан',
                            'Эрүүл мэндийн даатгал',
                            'Нийгмийн эрүүл мэнд'
                        ];
                    @endphp

                    @foreach($types as $type)
                        <div class="fr_item">
                            <p>{{ $type }}</p>
                            <h1>{{ $feedbackCounts[$type] ?? 0 }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section_line sl_other" id="feedback">
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
    </div>
</main>
@endsection
