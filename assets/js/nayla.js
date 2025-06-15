$(window).on("load", function () {
  winLoaded = true;

  window.scrollTo(0, 0);

  naylaImageAnims();
});

class naylaImageAnimation {
  DOM = {
    el: null,
    image: null,
  };

  animations = ["slideLeft", "slideRight", "slideUp", "slideDown", "blockUp", "blockLeft", "blockRight", "blockDown", "maskCustom"];

  // Animation Defaults
  defaults = {
    duration: 1,
    delay: 0,
    stagger: 0,
    ease: "expo.out",
  };

  // Animation start stages
  from = {
    yPercent: 0,
  };

  // Scroll options
  scroll = {
    scrollTrigger: {
      trigger: null,
      scrub: null,
      pin: null,
      start: "top bottom",
    },
  };

  out = {
    yPercent: null,
    stagger: null,
    duration: null,
    ease: "expo.in",
    delay: 0,
  };

  constructor(DOM_el, options, fromOptions, scroll, out) {
    this.DOM.el = DOM_el;

    this.duration = $(this.DOM.el).data("duration");
    this.delay = $(this.DOM.el).data("delay");
    this.scrub = $(this.DOM.el).data("scrub");
    this.pin = $(this.DOM.el).data("pin");
    this.animOut = $(this.DOM.el).data("anim-out");
    this.imageScale = $(this.DOM.el).data("image-scale");

    this.scroll.scrollTrigger.trigger = this.DOM.el;

    this.classes = this.DOM.el.attr("class").split(" ");

    let animations = this.animations,
      classes = this.classes;

    const activeAnimation = classes.filter(function (obj) {
      return animations.indexOf(obj) !== -1;
    });

    this.pin == null ? (this.pin = false) : "";
    this.scrub == null ? (this.scrub = false) : "";
    this.imageScale == null ? (this.imageScale = false) : "";

    this.animOut == null ? (this.animOut = false) : "";
    // Set Animation Targets
    this.target = $(this.DOM.el);
    this.img = $(this.DOM.el).children("img");
    ////

    this.scaleimage = false;
    this.imageScale == true ? (this.scaleimage = true) : "";

    if (activeAnimation[0] === "maskCustom") {
      let startWidth = this.target.data("width"),
        startLeft = this.target.data("left"),
        startPath = "inset(0% " + (100 - startWidth - startLeft) + "% 0% " + startLeft + "%)";

      this.from.clipPath = startPath;
    }

    this.defaults.clipPath = "inset(0% 0% 0% 0%)";
    this.defaults.duration = 2;
    this.defaults.ease = "power4.inOut";

    // Defaults for animations

    if (activeAnimation[0] === "slideLeft") {
      this.from.clipPath = "inset(0% 0% 0% 100%)";

      this.defaults.clipPath = "inset(0% 0% 0% 0%)";
      this.defaults.duration = 2;

      this.animOut ? (this.out.clipPath = "inset(0% 100% 0% 0%)") : "";
    }

    if (activeAnimation[0] === "slideRight") {
      this.from.clipPath = "inset(0% 100% 0% 0%)";

      this.defaults.clipPath = "inset(0% 0% 0% 0%)";
      this.defaults.duration = 1.25;

      this.animOut ? (this.out.clipPath = "inset(0% 0% 0% 100%)") : "";
    }

    if (activeAnimation[0] === "slideUp") {
      this.from.clipPath = "inset(100% 0% 0% 0%)";

      this.defaults.clipPath = "inset(0% 0% 0% 0%)";
      this.defaults.duration = 2;

      this.animOut ? (this.out.clipPath = "inset(0% 0% 100% 0%)") : "";
    }

    if (activeAnimation[0] === "slideDown") {
      this.from.clipPath = "inset(0% 0% 100% 0%)";

      this.defaults.clipPath = "inset(0% 0% 0% 0%)";
      this.defaults.duration = 1.25;

      this.defaults.ease = "power3.inOut";
      this.animOut ? (this.out.clipPath = "inset(100% 0% 0% 0%)") : "";
    }

    if (
      activeAnimation[0] === "blockUp" ||
      activeAnimation[0] === "blockDown" ||
      activeAnimation[0] === "blockLeft" ||
      activeAnimation[0] === "blockRight"
    ) {
      $(this.DOM.el).append('<span class="block-ov"></div>');
      this.target = $(this.DOM.el).find(".block-ov");

      let bg = $(this.DOM.el).data("block-color");

      if (bg === "auto") {
        let imgSrc = $(this.DOM.el).find("img").attr("src");

        colorjs
          .average(imgSrc, {
            amount: 1,
          })
          .then((imgColor) => {
            $(this.DOM.el)
              .find(".block-ov")
              .css("backgroundColor", "rgb" + "(" + imgColor + ")");
          });
      } else {
        $(this.DOM.el).find(".block-ov").css("backgroundColor", $(this.DOM.el).data("block-color"));
      }

      activeAnimation[0] === "blockUp" ? (this.from.height = "100%") : "";

      if (activeAnimation[0] === "blockUp" || activeAnimation[0] === "blockDown") {
        this.defaults.height = "0%";
        this.animOut ? (this.out.height = "100%") : "";
      }

      if (activeAnimation[0] === "blockLeft" || activeAnimation[0] === "blockRight") {
        this.defaults.width = "0%";

        this.animOut ? (this.out.width = "100%") : "";
      }

      this.defaults.duration = 1;
      this.defaults.ease = "expo.inOut";
    }

    // Return default if data is null

    this.delay == null ? (this.delay = this.defaults.delay) : "";
    this.duration == null ? (this.duration = this.defaults.duration) : "";

    this.scrub == null ? (this.scrub = false) : "";

    // Asign options
    this.options = Object.assign(this.defaults, options);
    this.fromOptions = Object.assign(this.from, fromOptions);
    this.scroll = Object.assign(this.scroll, scroll);

    if (this.pin) {
      this.scrub = true;

      this.scroll.scrollTrigger.pin = true;
      this.scroll.scrollTrigger.scrub = 1;
      this.scroll.scrollTrigger.start = "center center";

      this.scroll.scrollTrigger.end = this.duration == null ? "botom top" : "bottom+=" + this.duration * 1000 + " top";
    }

    if (this.scrub && !this.pin) {
      this.scroll.scrollTrigger.scrub = 1;
      this.scroll.scrollTrigger.start = "top bottom";
      this.scroll.scrollTrigger.end = "bottom center";
    }

    if (this.animOut) {
      this.out.stagger = this.options.stagger;
      this.out.duration = this.options.duration;

      this.out = Object.assign(this.out, out);
    }

    this.options.delay = this.delay;
    this.options.duration = this.duration;
    this.scroll.scrollTrigger.scrub = this.scrub;

    // If anim out

    if (this.animOut) {
      this.out.stagger = this.options.stagger;
      this.out.duration = this.options.duration;

      this.out = Object.assign(this.out, out);
    } else {
      this.out = null;
    }

    requestAnimationFrame(() => this.render());
  }

  render() {
    var tl = gsap.timeline(this.scroll);

    tl.fromTo(this.target, this.fromOptions, this.options);

    if (this.scaleimage) {
      tl.fromTo(
        this.img,
        {
          scale: 1.2,
        },
        {
          scale: 1,
          duration: this.options.duration,
          ease: this.options.ease,
          delay: this.options.delay,
        },
        0
      );
    }

    this.animOut == true ? tl.to(this.target, this.out) : "";

    tl.eventCallback("onStart", () => {
      $(this.DOM.el).addClass("anim_start");
    });
  }
}

function naylaImageAnims() {
  $(".has-anim-image").each(function () {
    let $this = $(this);
    new naylaImageAnimation($this);
  });
}
