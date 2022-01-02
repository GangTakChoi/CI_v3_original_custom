<template>
  <div class="content">
    <div class="container-fluid">
        <card>
          testwo
        </card>
    </div>
  </div>
</template>

<script>
export default {
  created () {
    console.log('Testwo Created')
    let apiUrl = '/users'
    this.axios.get(apiUrl).then((response) => {
      console.log(response.data)
    })
    console.log('apiUrl::' + apiUrl)
  }
}
</script>

<style>

</style>