!function (c) {
    "use strict";

    function u(t, n) {
        this.element = t, this.options = n || {}, this.defaults = {
            output: {
                prefix: "",
                suffix: "",
                format: function (t) {
                    return t
                }
            }, change: function (t, n) {
            }
        }, this.metadata = c(this.element).data("options")
    }

    var i = "RangeSlider";
    u.defaults = (u.prototype = {
        init: function () {
            this.config = c.extend(!0, {}, this.defaults, this.options, this.metadata);
            var s = this;
            return this.trackFull = c('<div class="track track--full"></div>').appendTo(s.element), this.trackIncluded = c('<div class="track track--included"></div>').appendTo(s.element), this.inputs = [], c('input[type="range"]', this.element).each(function (t, n) {
                var a = this;
                a.output = c("<output>").appendTo(s.element), a.output.zindex = parseInt(c(a.output).css("z-index")) || 1, a.thumb = c('<div class="slider-thumb">').prependTo(s.element), a.initialValue = c(this).val(), a.update = function () {
                    var t = c(this).attr("max") - c(this).attr("min"), n = c(this).val() - c(this).attr("min"),
                        u = n / t * 100 + "%", i = n / t * -100 + "%",
                        e = "function" == typeof s.config.output.prefix ? s.config.output.prefix.call(s, a) : s.config.output.prefix,
                        n = s.config.output.format(c(a).val()),
                        t = "function" == typeof s.config.output.suffix ? s.config.output.suffix.call(s, a) : s.config.output.suffix;
                    c(a.output).html(e + "" + n + t), c(a.output).css("left", u), c(a.output).css("transform", "translate(" + i + ",0)"), c(a.thumb).css("left", u), c(a.thumb).css("transform", "translate(" + i + ",0)"), s.adjustTrack()
                }, a.sendOutputToFront = function () {
                    c(this.output).css("z-index", a.output.zindex + 1)
                }, a.sendOutputToBack = function () {
                    c(this.output).css("z-index", a.output.zindex)
                }, c(a.thumb).on("mousedown", function (t) {
                    s.sendAllOutputToBack(), a.sendOutputToFront(), c(this).data("tracking", !0), c(document).one("mouseup", function () {
                        c(a.thumb).data("tracking", !1), s.change(t)
                    })
                }), c("body").on("mousemove", function (t) {
                    var n;
                    c(a.thumb).data("tracking") && (n = c(a).offset(), (t = t.pageX - n.left) <= (n = c(a).width()) && (n = t / n, c(a).val(n * c(a).attr("max")), a.update()))
                }), c(this).on("mousedown input change touchstart", function (t) {
                    s.sendAllOutputToBack(), a.sendOutputToFront(), a.update()
                }), c(this).on("mouseup touchend", function (t) {
                    s.change(t)
                }), s.inputs.push(this)
            }), this.reset(), this
        }, sendAllOutputToBack: function () {
            c.map(this.inputs, function (t, n) {
                t.sendOutputToBack()
            })
        }, change: function (t) {
            var n = c.map(this.inputs, function (t, n) {
                return {value: parseInt(c(t).val()), min: parseInt(c(t).attr("min")), max: parseInt(c(t).attr("max"))}
            });
            n.sort(function (t, n) {
                return t.value - n.value
            }), this.config.change.call(this, t, n)
        }, reset: function () {
            c.map(this.inputs, function (t, n) {
                c(t).val(t.initialValue), t.update()
            })
        }, adjustTrack: function () {
            var e = 1 / 0, a = 1 / 0, s = 0, o = 0;
            c.map(this.inputs, function (t, n) {
                var u = parseInt(c(t).val()), i = parseInt(c(t).attr("min")), t = parseInt(c(t).attr("max"));
                e = u < e ? u : e, s = s < u ? u : s, a = i < a ? i : a, o = o < t ? t : o
            }), 1 < this.inputs.length ? (this.trackIncluded.css("width", (s - e) / (o - a) * 100 + "%"), this.trackIncluded.css("left", (e - a) / (o - a) * 100 + "%")) : (this.trackIncluded.css("width", s / (o - a) * 100 + "%"), this.trackIncluded.css("left", "0%"))
        }
    }).defaults, c.fn.RangeSlider = function (n) {
        return this.each(function () {
            var t = c(this).data(i);
            t || (t = new u(this, n).init(), c(this).data(i, t))
        })
    }
}(jQuery);
var rangeSlider = $("#facet-price-range-slider");
0 < rangeSlider.length && rangeSlider.RangeSlider({
    output: {
        format: function (t) {
            return "₹" + t.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ;
        }, suffix: function (t) {
            return t == parseInt($(t).attr("max")) ? this.config.maxSymbol : ""
        }
    }
});
