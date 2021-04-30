<template>
  <div id="app">
    <div class="container">
      <div class="title">
        <h1>Typing Game</h1>
        <div class="marker"></div>
      </div>
      <button v-if="startFlg2" class="startButton mb-20" @click="gameStart">
        START
      </button>
      <div v-if="startFlg2 != true">
        <div class="question mb-20">{{ current_question }}</div>
        <div class="clear" v-if="current_question_counts == questions_counts">
          !!Clear!!
        </div>
        <div class="typeFormWrapper mb-20">
          <input id="typeForm" type="text" class="typeForm" v-model="typeBox" />
        </div>
        <!-- <div class="gaugeWrapper mb-20">
          <div class="gauge" v-bind:style="styleObjest"></div>
        </div> -->
        <div>{{ current_question_counts }}/{{ questions_counts }}</div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  data() {
    return {
      startFlg2: true,
      current_question: "",
      questions: [`banana`, `apple`, `chocolate`, `book`, `camera`],
      typeBox: "",
      current_question_counts: 0,
      questions_counts: 0,
    };
  },
  // computed: {
  //   styleObject: function () {
  //     width = 20 * this.current_question_counts + "%"
  //     if (this.current_question_counts == 5) {
  //       color="#03a9f4"
  //       } else {
  //         color="orange"
  //     }
  //     return{
  //       'width':width,
  //       'background-color':color
  //     }
  //   }
  // },
  methods: {
    gameStart() {
      this.startFlg2 = !true;
      this.$nextTick(function(){
        document.getElementById(`typeForm`).focus()
      })
    },
  },
  mounted: function () {
    this.current_question = this.questions[0];
    this.questions_counts = this.questions.length;
  },
  watch: {
    typeBox: function (e) {
      if (e == this.current_question) {
        this.questions.splice(0, 1);
        this.current_question = this.questions[0];
        this.typeBox = "";
        this.current_question_counts = this.current_question_counts + 1;
      }
    },
  },
};
</script>

<style scoped>
html,
body,
div,
span,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
abbr,
address,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
samp,
small,
strong,
sub,
sup,
var,
b,
i,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent;
}

body {
  line-height: 1;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}

nav ul {
  list-style: none;
}

blockquote,
q {
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}

a {
  margin: 0;
  padding: 0;
  font-size: 100%;
  vertical-align: baseline;
  background: transparent;
}

/* change colours to suit your needs */
ins {
  background-color: #ff9;
  color: #000;
  text-decoration: none;
}

/* change colours to suit your needs */
mark {
  background-color: #ff9;
  color: #000;
  font-style: italic;
  font-weight: bold;
}

del {
  text-decoration: line-through;
}

abbr[title],
dfn[title] {
  border-bottom: 1px dotted;
  cursor: help;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

/* change border colour to suit your needs */
hr {
  display: block;
  height: 1px;
  border: 0;
  border-top: 1px solid #cccccc;
  margin: 1em 0;
  padding: 0;
}

input,
select {
  vertical-align: middle;
}
#app {
  font-size: 32px;
}
.mb-20 {
  margin: 20px;
}
.container {
  width: 400px;
  margin: 0 auto;
  text-align: center;
}
.title {
  position: relative;
  font-size: 28px;
}
.marker {
  width: 100%;
  height: 35%;
  background-color: #a2a2a270;
  position: absolute;
  bottom: 5%;
  z-index: -1;
}
.startButton {
  background-color: #333;
  color: #fff;
  padding: 4px 60px;
  border: none;
  outline: none;
  border-radius: 8px;
  cursor: pointer;
  font-size: 32px;
}
.startButton:hover {
  opacity: 0.7;
}
.question {
  color: grey;
}
.clear {
  color: #03a9f4;
  font-size:85px;
  margin: 0 auto;
}
.typeForm {
  text-align: center;
  width: 100%;
  font-size: 30px;
  outline: none;
  border: none;
}
.typeFormWrapper {
  border-bottom: 1px solid gray;
}
.gauge {
  height: 12px;
  transition: all 0.3s ease;
}
.gaugeWrapper {
  border: 1px solid;
  height: 12px;
}
</style>