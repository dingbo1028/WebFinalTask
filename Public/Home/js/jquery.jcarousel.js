(function(e){
    var t={
        vertical:false,
        rtl:false,
        start:1,
        offset:1,
        size:null,
        scroll:4,
        visible:null,
        animation:"normal",
        easing:"swing",
        auto:0,
        wrap:null,
        initCallback:null,
        setupCallback:null,
        reloadCallback:null,
        itemLoadCallback:null,
        itemFirstInCallback:null,
        itemFirstOutCallback:null,
        itemLastInCallback:null,
        itemLastOutCallback:null,
        itemVisibleInCallback:null,
        itemVisibleOutCallback:null,
        animationStepCallback:null,
        buttonNextHTML:"<div></div>",
        buttonPrevHTML:"<div></div>",
        buttonNextEvent:"click",
        buttonPrevEvent:"click",
        buttonNextCallback:null,
        buttonPrevCallback:null,
        itemFallbackDimension:null
    },n=false;
    e(window).bind("load.jcarousel",function(){n=true});
    e.jcarousel=function(r,i){
        this.options=e.extend({},t,i||{});
        this.locked=false;
        this.autoStopped=false;
        this.container=null;
        this.clip=null;
        this.list=null;
        this.buttonNext=null;
        this.buttonPrev=null;
        this.buttonNextState=null;
        this.buttonPrevState=null;
        if(!i||i.rtl===undefined){
            this.options.rtl=(e(r).attr("dir")||e("html").attr("dir")||"").toLowerCase()=="rtl"
        }
        this.wh=!this.options.vertical?"width":"height";
        this.lt=!this.options.vertical?this.options.rtl?"right":"left":"top";
        var s="",o=r.className.split(" ");
        for(var u=0;u<o.length;u++){
            if(o[u].indexOf("jcarousel-skin")!=-1){
                e(r).removeClass(o[u]);s=o[u];
                break
            }
        }
        if(r.nodeName.toUpperCase()=="UL"||r.nodeName.toUpperCase()=="OL"){
            this.list=e(r);this.clip=this.list.parents(".jcarousel-clip");
            this.container=this.list.parents(".jcarousel-container")
        }else{
            this.container=e(r);this.list=this.container.find("ul,ol").eq(0);
            this.clip=this.container.find(".jcarousel-clip")
        }
        if(this.clip.size()===0){
            this.clip=this.list.wrap("<div></div>").parent()
        }
        if(this.container.size()===0){
            this.container=this.clip.wrap("<div></div>").parent()
        }
        if(s!==""&&this.container.parent()[0].className.indexOf("jcarousel-skin")==-1){
            this.container.wrap('<div class=" '+s+'"></div>')
        }
        this.buttonPrev=e(".jcarousel-prev",this.container);
        if(this.buttonPrev.size()===0&&this.options.buttonPrevHTML!==null){
            this.buttonPrev=e(this.options.buttonPrevHTML).appendTo(this.container)
        }
        this.buttonPrev.addClass(this.className("jcarousel-prev"));
        this.buttonNext=e(".jcarousel-next",this.container);
        if(this.buttonNext.size()===0&&this.options.buttonNextHTML!==null){
            this.buttonNext=e(this.options.buttonNextHTML).appendTo(this.container)
        }
        this.buttonNext.addClass(this.className("jcarousel-next"));
        this.clip.addClass(this.className("jcarousel-clip")).css({position:"relative"});
        this.list.addClass(this.className("jcarousel-list")).css({overflow:"hidden",position:"relative",top:0,margin:0,padding:0}).css(this.options.rtl?"right":"left",0);
        this.container.addClass(this.className("jcarousel-container")).css({position:"relative"});
        if(!this.options.vertical&&this.options.rtl){
            this.container.addClass("jcarousel-direction-rtl").attr("dir","rtl")
        }
        var a=this.options.visible!==null?Math.ceil(this.clipping()/this.options.visible):null;
        var f=this.list.children("li");
        var l=this;
        if(f.size()>0){
            var c=0,h=this.options.offset;
            f.each(function(){
                l.format(this,h++);
                c+=l.dimension(this,a)
            });
            this.list.css(this.wh,c+100+"px");
            if(!i||i.size===undefined){
                this.options.size=f.size()
            }
        }
        this.container.css("display","block");
        this.buttonNext.css("display","block");
        this.buttonPrev.css("display","block");
        this.funcNext=function(){l.next()};
        this.funcPrev=function(){l.prev()};
        this.funcResize=function(){
            if(l.resizeTimer){
                clearTimeout(l.resizeTimer)
            }l.resizeTimer=setTimeout(function(){l.reload()},100)};
        if(this.options.initCallback!==null){
            this.options.initCallback(this,"init")
        }
        if(!n&&e.browser.safari){
            this.buttons(false,false);e(window).bind("load.jcarousel",function(){l.setup()})
        }else{
            this.setup()
        }
    };





    var r=e.jcarousel;
    r.fn=r.prototype={
        jcarousel:"0.2.8"
    };
    r.fn.extend=r.extend=e.extend;
    r.fn.extend({setup:function(){
        this.first=null;
        this.last=null;
        this.prevFirst=null;
        this.prevLast=null;
        this.animating=false;
        this.timer=null;
        this.resizeTimer=null;
        this.tail=null;
        this.inTail=false;
        if(this.locked){
            return
        }
        this.list.css(this.lt,this.pos(this.options.offset)+"px");
        var t=this.pos(this.options.start,true);
        this.prevFirst=this.prevLast=null;
        this.animate(t,false);
        e(window).unbind("resize.jcarousel",this.funcResize).bind("resize.jcarousel",this.funcResize);
        if(this.options.setupCallback!==null){
            this.options.setupCallback(this)
        }
    },
        reset:function(){
        this.list.empty();
        this.list.css(this.lt,"0px");
        this.list.css(this.wh,"10px");
        if(this.options.initCallback!==null){
            this.options.initCallback(this,"reset")
        }
            this.setup()
        },reload:function(){if(this.tail!==null&&this.inTail){this.list.css(this.lt,r.intval(this.list.css(this.lt))+this.tail)}this.tail=null;
        this.inTail=false;
        if(this.options.reloadCallback!==null){this.options.reloadCallback(this)}if(this.options.visible!==null){var e=this;var t=Math.ceil(this.clipping()/this.options.visible),n=0,i=0;
            this.list.children("li").each(function(r){n+=e.dimension(this,t);
                if(r+1<e.first){i=n}});
            this.list.css(this.wh,n+"px");
            this.list.css(this.lt,-i+"px")}this.scroll(this.first,false)},lock:function(){this.locked=true;
        this.buttons()},unlock:function(){this.locked=false;
        this.buttons()},size:function(e){if(e!==undefined){this.options.size=e;
        if(!this.locked){this.buttons()}}return this.options.size},has:function(e,t){if(t===undefined||!t){t=e}if(this.options.size!==null&&t>this.options.size){t=this.options.size}for(var n=e;n<=t;n++){var r=this.get(n);
        if(!r.length||r.hasClass("jcarousel-item-placeholder")){return false}}return true},get:function(t){return e(">.jcarousel-item-"+t,this.list)},add:function(t,n){var i=this.get(t),s=0,o=e(n);
        if(i.length===0){var u,a=r.intval(t);
            i=this.create(t);
            while(true){u=this.get(--a);
                if(a<=0||u.length){if(a<=0){this.list.prepend(i)}else{u.after(i)}break}}}else{s=this.dimension(i)}if(o.get(0).nodeName.toUpperCase()=="LI"){i.replaceWith(o);i=o}else{i.empty().append(n)}this.format(i.removeClass(this.className("jcarousel-item-placeholder")),t);
        var f=this.options.visible!==null?Math.ceil(this.clipping()/this.options.visible):null;
        var l=this.dimension(i,f)-s;
        if(t>0&&t<this.first){this.list.css(this.lt,r.intval(this.list.css(this.lt))-l+"px")}this.list.css(this.wh,r.intval(this.list.css(this.wh))+l+"px");return i},remove:function(e){var t=this.get(e);
        if(!t.length||e>=this.first&&e<=this.last){return}var n=this.dimension(t);
        if(e<this.first){this.list.css(this.lt,r.intval(this.list.css(this.lt))+n+"px")}t.remove();
        this.list.css(this.wh,r.intval(this.list.css(this.wh))-n+"px")},next:function(){if(this.tail!==null&&!this.inTail){this.scrollTail(false)}else{this.scroll((this.options.wrap=="both"||this.options.wrap=="last")&&this.options.size!==null&&this.last==this.options.size?1:this.first+this.options.scroll)}},prev:function(){if(this.tail!==null&&this.inTail){this.scrollTail(true)}else{this.scroll((this.options.wrap=="both"||this.options.wrap=="first")&&this.options.size!==null&&this.first==1?this.options.size:this.first-this.options.scroll)}},scrollTail:function(e){if(this.locked||this.animating||!this.tail){return}this.pauseAuto();
        var t=r.intval(this.list.css(this.lt));
        t=!e?t-this.tail:t+this.tail;
        this.inTail=!e;this.prevFirst=this.first;
        this.prevLast=this.last;this.animate(t)},scroll:function(e,t){if(this.locked||this.animating){return}this.pauseAuto();
        this.animate(this.pos(e),t)},pos:function(e,t){var n=r.intval(this.list.css(this.lt));if(this.locked||this.animating){return n}if(this.options.wrap!="circular"){e=e<1?1:this.options.size&&e>this.options.size?this.options.size:e}var i=this.first>e;
        var s=this.options.wrap!="circular"&&this.first<=1?1:this.first;
        var o=i?this.get(s):this.get(this.last);
        var u=i?s:s-1;
        var a=null,f=0,l=false,c=0,h;
        while(i?--u>=e:++u<e){a=this.get(u);
            l=!a.length;
            if(a.length===0){a=this.create(u).addClass(this.className("jcarousel-item-placeholder"));
        o[i?"before":"after"](a);
                if(this.first!==null&&this.options.wrap=="circular"&&this.options.size!==null&&(u<=0||u>this.options.size)){h=this.get(this.index(u));
                    if(h.length){a=this.add(u,h.clone(true))}}}o=a;
            c=this.dimension(a);if(l){f+=c}if(this.first!==null&&(this.options.wrap=="circular"||u>=1&&(this.options.size===null||u<=this.options.size))){n=i?n+c:n-c}}var p=this.clipping(),d=[],v=0,m=0;
        o=this.get(e-1);
        u=e;
        while(++v){a=this.get(u);
            l=!a.length;
            if(a.length===0){a=this.create(u).addClass(this.className("jcarousel-item-placeholder"));if(o.length===0){this.list.prepend(a)}else{o[i?"before":"after"](a)}if(this.first!==null&&this.options.wrap=="circular"&&this.options.size!==null&&(u<=0||u>this.options.size)){h=this.get(this.index(u));
            if(h.length){a=this.add(u,h.clone(true))}}}o=a;
            c=this.dimension(a);
            if(c===0){throw new Error("jCarousel: No width/height set for items. This will cause an infinite loop. Aborting...")}if(this.options.wrap!="circular"&&this.options.size!==null&&u>this.options.size){d.push(a)}else if(l){f+=c}m+=c;
            if(m>=p){break}u++}for(var g=0; g<d.length;g++){d[g].remove()}if(f>0){this.list.css(this.wh,this.dimension(this.list)+f+"px");
            if(i){n-=f;
                this.list.css(this.lt,r.intval(this.list.css(this.lt))-f+"px")}}var y=e+v-1;
        if(this.options.wrap!="circular"&&this.options.size&&y>this.options.size){y=this.options.size}if(u>y){v=0;
            u=y;
            m=0;
        while(++v){a=this.get(u--);
        if(!a.length){break}m+=this.dimension(a);
            if(m>=p){break}}}var b=y-v+1;
        if(this.options.wrap!="circular"&&b<1){b=1}if(this.inTail&&i){n+=this.tail;
            this.inTail=false}this.tail=null;
        if(this.options.wrap!="circular"&&y==this.options.size&&y-v+1>=1){var w=r.intval(this.get(y).css(!this.options.vertical?"marginRight":"marginBottom"));
            if(m-w>p){this.tail=m-p-w}}if(t&&e===this.options.size&&this.tail){n-=this.tail;
        this.inTail=true}while(e-->b){n+=this.dimension(this.get(e))}this.prevFirst=this.first;
        this.prevLast=this.last;
        this.first=b;
        this.last=y;
        return n},animate:function(t,n){if(this.locked||this.animating){return}this.animating=true;var r=this;var i=function(){r.animating=false;
        if(t===0){r.list.css(r.lt,0)}if(!r.autoStopped&&(r.options.wrap=="circular"||r.options.wrap=="both"||r.options.wrap=="last"||r.options.size===null||r.last<r.options.size||r.last==r.options.size&&r.tail!==null&&!r.inTail)){r.startAuto()}r.buttons();
        r.notify("onAfterAnimation");
        if(r.options.wrap=="circular"&&r.options.size!==null){
            for(var e=r.prevFirst; e<=r.prevLast; e++){
                if(e!==null&&!(e>=r.first&&e<=r.last)&&(e<1||e>r.options.size)){r.remove(e)}}
        }};
        this.notify("onBeforeAnimation");if(!this.options.animation||n===false){this.list.css(this.lt,t+"px");
            i()}else{var s=!this.options.vertical?this.options.rtl?{right:t}:{left:t}:{top:t};var o={duration:this.options.animation,easing:this.options.easing,complete:i};
        if(e.isFunction(this.options.animationStepCallback)){o.step=this.options.animationStepCallback}this.list.animate(s,o)}},startAuto:function(e){if(e!==undefined){this.options.auto=e}if(this.options.auto===0){return this.stopAuto()}if(this.timer!==null){return}this.autoStopped=false;
        var t=this;
        this.timer=window.setTimeout(function(){t.next()},this.options.auto*1e3)},stopAuto:function(){this.pauseAuto();
        this.autoStopped=true},pauseAuto:function(){if(this.timer===null){return}window.clearTimeout(this.timer);
        this.timer=null},buttons:function(e,t){if(e==null){e=!this.locked&&this.options.size!==0&&(this.options.wrap&&this.options.wrap!="first"||this.options.size===null||this.last<this.options.size);
        if(!this.locked&&(!this.options.wrap||this.options.wrap=="first")&&this.options.size!==null&&this.last>=this.options.size){e=this.tail!==null&&!this.inTail}}if(t==null){t=!this.locked&&this.options.size!==0&&(this.options.wrap&&this.options.wrap!="last"||this.first>1);
        if(!this.locked&&(!this.options.wrap||this.options.wrap=="last")&&this.options.size!==null&&this.first==1){t=this.tail!==null&&this.inTail}}var n=this;
        if(this.buttonNext.size()>0){this.buttonNext.unbind(this.options.buttonNextEvent+".jcarousel",this.funcNext);
        if(e){this.buttonNext.bind(this.options.buttonNextEvent+".jcarousel",this.funcNext)}this.buttonNext[e?"removeClass":"addClass"](this.className("jcarousel-next-disabled")).attr("disabled",e?false:true);
        if(this.options.buttonNextCallback!==null&&this.buttonNext.data("jcarouselstate")!=e){this.buttonNext.each(function(){n.options.buttonNextCallback(n,this,e)}).data("jcarouselstate",e)}}else{if(this.options.buttonNextCallback!==null&&this.buttonNextState!=e){this.options.buttonNextCallback(n,null,e)}}if(this.buttonPrev.size()>0){this.buttonPrev.unbind(this.options.buttonPrevEvent+".jcarousel",this.funcPrev);
        if(t){this.buttonPrev.bind(this.options.buttonPrevEvent+".jcarousel",this.funcPrev)}this.buttonPrev[t?"removeClass":"addClass"](this.className("jcarousel-prev-disabled")).attr("disabled",t?false:true);
        if(this.options.buttonPrevCallback!==null&&this.buttonPrev.data("jcarouselstate")!=t){this.buttonPrev.each(function(){n.options.buttonPrevCallback(n,this,t)}).data("jcarouselstate",t)}}else{if(this.options.buttonPrevCallback!==null&&this.buttonPrevState!=t){this.options.buttonPrevCallback(n,null,t)}}this.buttonNextState=e;
        this.buttonPrevState=t},notify:function(e){var t=this.prevFirst===null?"init":this.prevFirst<this.first?"next":"prev";
        this.callback("itemLoadCallback",e,t);
        if(this.prevFirst!==this.first){this.callback("itemFirstInCallback",e,t,this.first);
            this.callback("itemFirstOutCallback",e,t,this.prevFirst)}if(this.prevLast!==this.last){this.callback("itemLastInCallback",e,t,this.last);
            this.callback("itemLastOutCallback",e,t,this.prevLast)}this.callback("itemVisibleInCallback",e,t,this.first,this.last,this.prevFirst,this.prevLast);
        this.callback("itemVisibleOutCallback",e,t,this.prevFirst,this.prevLast,this.first,this.last)},callback:function(t,n,r,i,s,o,u){if(this.options[t]==null||typeof this.options[t]!="object"&&n!="onAfterAnimation"){return}var a=typeof this.options[t]=="object"?this.options[t][n]:this.options[t];
        if(!e.isFunction(a)){return}var f=this;
        if(i===undefined){a(f,r,n)}else if(s===undefined){this.get(i).each(function(){a(f,this,i,r,n)})}else{var l=function(e){f.get(e).each(function(){a(f,this,e,r,n)})};
        for(var c=i;c<=s;c++){if(c!==null&&!(c>=o&&c<=u)){l(c)}}}},create:function(e){return this.format("<li></li>",e)},format:function(t,n){t=e(t);
        var r=t.get(0).className.split(" ");
        for(var i=0;i<r.length; i++){if(r[i].indexOf("jcarousel-")!=-1){t.removeClass(r[i])}}t.addClass(this.className("jcarousel-item")).addClass(this.className("jcarousel-item-"+n)).css({"float":this.options.rtl?"right":"left","list-style":"none"}).attr("jcarouselindex",n);
        return t},className:function(e){return e+" "+e+(!this.options.vertical?"-horizontal":"-vertical")},dimension:function(t,n){var i=e(t);
        if(n==null){return!this.options.vertical?i.outerWidth(true)||r.intval(this.options.itemFallbackDimension):i.outerHeight(true)||r.intval(this.options.itemFallbackDimension)}else{var s=!this.options.vertical?n-r.intval(i.css("marginLeft"))-r.intval(i.css("marginRight")):n-r.intval(i.css("marginTop"))-r.intval(i.css("marginBottom"));
        e(i).css(this.wh,s+"px");return this.dimension(i)}},clipping:function(){return!this.options.vertical?this.clip[0].offsetWidth-r.intval(this.clip.css("borderLeftWidth"))-r.intval(this.clip.css("borderRightWidth")):this.clip[0].offsetHeight-r.intval(this.clip.css("borderTopWidth"))-r.intval(this.clip.css("borderBottomWidth"))},index:function(e,t){if(t==null){t=this.options.size}return Math.round(((e-1)/t-Math.floor((e-1)/t))*t)+1}});
    r.extend({defaults:function(n){return e.extend(t,n||{})},intval:function(e){e=parseInt(e,10);
        return isNaN(e)?0:e},windowLoaded:function(){n=true}});
    e.fn.jcarousel=function(t){if(typeof t=="string"){var n=e(this).data("jcarousel"),i=Array.prototype.slice.call(arguments,1);
        return n[t].apply(n,i)}else{return this.each(function(){var n=e(this).data("jcarousel");
        if(n){if(t){e.extend(n.options,t)}n.reload()}else{e(this).data("jcarousel",new r(this,t))}})}}})(jQuery)