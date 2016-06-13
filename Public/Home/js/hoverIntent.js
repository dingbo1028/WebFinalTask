(function(e){
    e.fn.hoverIntent=function(t,n){
        var r={sensitivity:7,interval:100,timeout:0};
        r=e.extend(r,n?{over:t,out:n}:t);
        var i,s,o,u;var a=function(e){
            i=e.pageX;s=e.pageY};
        var f=function(t,n){
            n.hoverIntent_t=clearTimeout(n.hoverIntent_t);
            if(Math.abs(o-i)+Math.abs(u-s)<r.sensitivity){
                e(n).unbind("mousemove",a);
                n.hoverIntent_s=1;
                return r.over.apply(n,[t])
            }else{
                o=i;u=s;n.hoverIntent_t=setTimeout(function(){
                    f(t,n)},r.interval)
            }
        };
        var l=function(e,t){
            t.hoverIntent_t=clearTimeout(t.hoverIntent_t);
            t.hoverIntent_s=0;
            return r.out.apply(t,[e])
        };
        var c=function(t){
            var n=(t.type=="mouseover"?t.fromElement:t.toElement)||t.relatedTarget;
            while(n&&n!=this){
                try{n=n.parentNode}catch(t){n=this}
            }
            if(n==this){
                return false
            }
            var i=jQuery.extend({},t);
            var s=this;
            if(s.hoverIntent_t){
                s.hoverIntent_t=clearTimeout(s.hoverIntent_t)
            }
            if(t.type=="mouseover"){
                o=i.pageX;u=i.pageY;
                e(s).bind("mousemove",a);
                if(s.hoverIntent_s!=1){
                    s.hoverIntent_t=setTimeout(function(){f(i,s)},r.interval)
                }
            }else{
                e(s).unbind("mousemove",a);
                if(s.hoverIntent_s==1){
                    s.hoverIntent_t=setTimeout(function(){l(i,s)},r.timeout)}
            }
        };
        return this.mouseover(c).mouseout(c)
    }
}
)(jQuery);
(function(e){
    "use strict";
    function n(t,r,i,s){
        function c(e){
            if(e.timeout)o.cycleTimeout=setTimeout(function(){n(t,e,0,!e.rev)},e.timeout)
        }
        if(r.busy)
            return;
        var o=t[0].parentNode,u=t[r.currSlide],a=t[r.nextSlide];
        if(o.cycleTimeout===0&&!i)
            return;
        if(i||!o.cyclePause){
            if(r.before.length)e.each(r.before,function(e,t){t.apply(a,[u,a,r,s])});
            var f=function(){
                if(e.browser.msie)this.style.removeAttribute("filter");
                e.each(r.after,function(e,t){t.apply(a,[u,a,r,s])});
                c(r)};if(r.nextSlide!=r.currSlide){
                r.busy=1;
                e.fn.cycle.custom(u,a,r,f)
            }
            var l=r.nextSlide+1==t.length;r.nextSlide=l?0:r.nextSlide+1;r.currSlide=l?t.length-1:r.nextSlide-1
        }else{
            c(r)
        }
    }
    function r(e,t,r){
        var i=e[0].parentNode,s=i.cycleTimeout;
        if(s){
            clearTimeout(s);
            i.cycleTimeout=0
        }
        t.nextSlide=t.currSlide+r;
        if(t.nextSlide<0){
            t.nextSlide=e.length-1
        }else if(t.nextSlide>=e.length){
            t.nextSlide=0
        }
        n(e,t,1,r>=0);
        return false
    }
    var t="Lite-1.6";
    e.fn.cycle=function(t){
        return this.each(function(){t=t||{};
            if(this.cycleTimeout)clearTimeout(this.cycleTimeout);
            this.cycleTimeout=0;
            this.cyclePause=0;
            var i=e(this);
            var s=t.slideExpr?e(t.slideExpr,this):i.children();var o=s.get();if(o.length<2){if(window.console)console.log("terminating; too few slides: "+o.length);return}var u=e.extend({},e.fn.cycle.defaults,t||{},e.metadata?i.metadata():e.meta?i.data():{});var a=e.isFunction(i.data)?i.data(u.metaAttr):null;if(a)u=e.extend(u,a);u.before=u.before?[u.before]:[];u.after=u.after?[u.after]:[];u.after.unshift(function(){u.busy=0});var f=this.className;u.width=parseInt((f.match(/w:(\d+)/)||[])[1],10)||u.width;u.height=parseInt((f.match(/h:(\d+)/)||[])[1],10)||u.height;u.timeout=parseInt((f.match(/t:(\d+)/)||[])[1],10)||u.timeout;if(i.css("position")=="static")i.css("position","relative");if(u.width)i.width(u.width);if(u.height&&u.height!="auto")i.height(u.height);var l=0;s.css({position:"absolute",top:0}).each(function(t){e(this).css("z-index",o.length-t)});e(o[l]).css("opacity",1).show();if(e.browser.msie)o[l].style.removeAttribute("filter");if(u.fit&&u.width)s.width(u.width);if(u.fit&&u.height&&u.height!="auto")s.height(u.height);if(u.pause)i.hover(function(){this.cyclePause=1},function(){this.cyclePause=0});var c=e.fn.cycle.transitions[u.fx];if(c)c(i,s,u);s.each(function(){var t=e(this);this.cycleH=u.fit&&u.height?u.height:t.height();this.cycleW=u.fit&&u.width?u.width:t.width()});if(u.cssFirst)e(s[l]).css(u.cssFirst);if(u.timeout){if(u.speed.constructor==String)u.speed={slow:600,fast:200}[u.speed]||400;if(!u.sync)u.speed=u.speed/2;while(u.timeout-u.speed<250)u.timeout+=u.speed}u.speedIn=u.speed;u.speedOut=u.speed;u.slideCount=o.length;u.currSlide=l;u.nextSlide=1;var h=s[l];if(u.before.length)u.before[0].apply(h,[h,h,u,true]);if(u.after.length>1)u.after[1].apply(h,[h,h,u,true]);if(u.click&&!u.next)u.next=u.click;if(u.next)e(u.next).unbind("click.cycle").bind("click.cycle",function(){return r(o,u,u.rev?-1:1)});if(u.prev)e(u.prev).unbind("click.cycle").bind("click.cycle",function(){return r(o,u,u.rev?1:-1)});if(u.timeout)this.cycleTimeout=setTimeout(function(){n(o,u,0,!u.rev)},u.timeout+(u.delay||0))})};e.fn.cycle.custom=function(t,n,r,i){var s=e(t),o=e(n);o.css(r.cssBefore);var u=function(){o.animate(r.animIn,r.speedIn,r.easeIn,i)};s.animate(r.animOut,r.speedOut,r.easeOut,function(){s.css(r.cssAfter);if(!r.sync)u()});if(r.sync)u()};e.fn.cycle.transitions={fade:function(e,t,n){t.not(":eq(0)").hide();n.cssBefore={opacity:0,display:"block"};n.cssAfter={display:"none"};n.animOut={opacity:0};n.animIn={opacity:1}},fadeout:function(t,n,r){r.before.push(function(t,n,r,i){e(t).css("zIndex",r.slideCount+(i===true?1:0));e(n).css("zIndex",r.slideCount+(i===true?0:1))});n.not(":eq(0)").hide();r.cssBefore={opacity:1,display:"block",zIndex:1};r.cssAfter={display:"none",zIndex:0};r.animOut={opacity:0};r.animIn={opacity:1}}};e.fn.cycle.ver=function(){return t};e.fn.cycle.defaults={animIn:{},animOut:{},fx:"fade",after:null,before:null,cssBefore:{},cssAfter:{},delay:0,fit:0,height:"auto",metaAttr:"cycle",next:null,pause:false,prev:null,speed:1e3,slideExpr:null,sync:true,timeout:4e3}})
(jQuery)