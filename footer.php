<footer>
    <div class="bottom">
        <div class="disclaimer">
            <h4 style="text-align: center;"><i>This website is for educational purposes only.</i></h4>
            Built By: <img src="..\logo.png">
        </div>
        <a href="#" class="top">Back to Top &#8593;</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<style>
    .bottom {

      font-family: 'Inter', sans-serif;
      background-color: yellow;
      text-align: center;
      padding-top: 1%;
      padding-bottom: 3%;
      margin-top: 5%;
    }

    .disclaimer {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .top {
      --offset: 50px;

      position: sticky;
      bottom: 20px;
      margin-right: 10px;
      place-self: end;
      margin-top: calc(100vh + var(--offset));

      text-decoration: none;
      padding: 10px;
      font-family: 'Inter', sans-serif;
      color: #fff;
      background: #000;
      border-radius: 100px;
      white-space: nowrap;
    }

    .disclaimer img{
      width: 15%;
    }

    .disclaimer h4{
        font-size: 20px;
    }
</style>
</html>