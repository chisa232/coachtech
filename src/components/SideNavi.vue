<template>
  <div>
    <div class="left-padding">
      <img class="logo" src="../assets/img/logo.png" alt="/" />
      <div class="flex icon-field" @click="$router.push('/home')">
        <img class="icon" src="../assets/img/home.png" alt="/" />
        <p>ホーム</p>
      </div>
      <div class="flex icon-field" @click="$router.push('/profile')">
        <img class="icon" src="../assets/img/profile.png" alt="/" />
        <p>プロフィール</p>
      </div>
      <div class="flex icon-field" @click="$router.push('logout')">
        <img class="icon" src="../assets/img/logout.png" alt="/" />
        <p>ログアウト</p>
      </div>
    </div>
    <ShareMessage />
  </div>
</template>

<script>
import ShareMessage from "../components/ShareMessage";

export default {
  components: {
    ShareMessage,
  },
};
</script>

<style scoped>
.left-padding {
  margin: 20px;
}
.flex {
  display: flex;
}
.logo {
  width: 100px;
}
.icon-field {
  margin-top: 15px;
  cursor: pointer;
}
.icon {
  width: 25px;
  height: 25px;
}
.icon-field p {
  font-size: 16px;
  padding-left: 15px;
}
</style>