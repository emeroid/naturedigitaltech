<!-- Revolution Slider -->
    <div class="g-overflow-hidden">
      <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery" style="background:#aaaaaa;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_26_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
          <ul>
            @foreach($slides as $slide)
            <!-- SLIDE 1 -->
            <li data-index="rs-7{{$slide->id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="#"
            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="/assets/img/Uploads/Slider/{{$slide->bg_img}}" data-bgcolor='linear-gradient(90deg, rgba(0, 0, 153, 0.5) 0%, rgba(0, 190, 214, 0.6) 100%)' style='background:linear-gradient(90deg, rgba(0, 0, 153, 0.5) 0%, rgba(0, 190, 214, 0.6) 100%)' alt="" data-bgposition="center center"
              data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
              <!-- LAYERS -->

              <!-- LAYER NR. 2 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-73-layer-1" data-x="['center','center','center','center']" data-hoffset="['500','500','390','220']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"delay":400,"speed":750,"sfxcolor":"#2f3b4a","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
              data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">
                <img src="/assets/img/Uploads/Slider/{{$slide->body_img}}" alt="" data-ww="['1000px','1000px','800px','500px']" data-hh="['563px','563px','450','281']" width="1200" height="675" data-no-retina>
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme" id="slide-73-layer-3" data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" data-width="none" data-height="none"
              data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[20,20,20,20]" style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;">{{$slide->category}}
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption   tp-resizeme" id="slide-73-layer-2" data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']" data-fontsize="['70','70','70','50']"
              data-lineheight="['70','70','70','50']" data-width="['650','650','620','380']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[20,20,20,20]" data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]" data-paddingleft="[20,20,20,20]" style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; font-weight: 600; line-height: 70px; color: #ffffff; letter-spacing: -2px;">{!!$slide->body!!}
              </div>
            </li>

            @endforeach

          </ul>
          <div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
        </div>
      </div>
    </div>
    <!-- End Revolution Slider -->