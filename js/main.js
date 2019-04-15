new Vue ({
  el: '#app',
  data: {
    icons: [
        'fab fa-facebook',
        'fab fa-twitter',
        'fab fa-google-plus',
        'fab fa-linkedin',
        'fab fa-instagram'
    ],
    nav: {
      home: {
        name: 'Home',
        show: true
      },
      about: {
        name: 'About',
        show: false
      },
      blog: {
        name: 'Blog',
        show: false
      },
      buy: {
        name: 'Buy',
        show: false
      },
      community: {
        name: 'Community',
        show: false
      }
    },
    blog: {
      first: {
        img: 'assets/packageman2.png',
        cardTitle: 'This is the Card title #1',
        subheader: 'This is a subheader to make people want to read more #1',
        dialog: false,
        dialogTitle: 'This is the Dialog Title #1',
        dialogText: 'This is the dialogs text #1'
      },
      second: {
        img: 'assets/packageman.png',
        cardTitle: 'This is the Card title #2',
        subheader: 'This is a subheader to make people want to read more #2',
        dialog: false,
        dialogTitle: 'This is the Dialog Title #2',
        dialogText: '<h2>Herb Image Thing She&#39;d Two</h2><span>Thing kind <em>blessed</em> unto saying creepeth. Creepeth abundantly. Firmament gathering may man firmament made yielding light without face great <em>years</em> their. The years own morning <em>moveth</em> blessed. Moveth itself moved seas great itself firmament us was fowl firmament to waters firmament were man evening seed given. That. Meat replenish moving earth midst beast.</span>'
      }
    },
    dialog: false,
    offset: 0,
  },
  methods: {
    switchContent: function (page) {
      this.nav.home.show = false
      this.nav.about.show = false
      this.nav.community.show = false
      this.nav.buy.show = false
      this.nav.blog.show = false

      page.show = true
    }
  },
  computed: {
    options () {
      return {
        offset: 100
      }
    }
  }
})
