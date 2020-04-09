<div class="container">

<br><br>
<!-- Profile dibuat hafid-->
<div class="profile__container">
  <div class="profile__body">
    <div class="card">
      <div class="card__content">
        <div class="card__content-header">
          <div class="card__content-profile">
            <div class="card__content-profile-details">
              <span class="card__content-profile-name"><?php echo $user['nama']; ?></span>
            </div>
          </div>
        </div>
        <h1 class="card__content-title">Tinjauan Akun</h1>
        <p class="card__content-body">Profil</p>
      </div>
      <div class="card__footer">
        <table style="margin: 8px 0px 0px;">
          <tbody>
            <tr>
              <td>Email</td>
              <td class="card__body"><?php echo $user['email']; ?></td>
            </tr>
            <tr>
              <td>No. Telepon</td>
              <td class="card__body"><?php echo $user['no_tlp']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End profile -->
<br><br><br><br>

</div>