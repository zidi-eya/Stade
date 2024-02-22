<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Football Ticket Interface</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
  body {
    background-color: #e5f4e3;
  }
  .ticket-wrapper {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    background-image: url('assets/stade.jpg'); /* Remplacez par le chemin de votre image */
  background-size: cover; /* Assure que l'image couvre toute la div */
  background-position: center; /* Centre l'image dans la div */
  position: relative;
  overflow: hidden; /* Empêche le pseudo-élément de déborder */

  }
  /* Make sure other elements inside the ticket-wrapper are positioned above the pseudo-element */
.ticket-content, .ticket-header, .ticket-footer {
  position: relative;
  z-index: 2; /* Higher than the pseudo-element to keep the content sharp */

}
.ticket-wrapper::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('C:/Users/TouTa/Downloads/herbe-verte-ultra-detaillee-eclairage-cinematographique-stade-football.jpg');
  background-size: cover;
  background-position: center;
  filter: blur(8px); /* Adjust the blur level as needed */
  z-index: -1; /* Ensures that the blur is behind the content */
}

 
  .ticket-header {
    text-align: center;
    padding: 20px;
  }
  .ticket-header .badge {
    font-size: 1rem;
    color: #fff;
    background-color:#FF3131;
    padding: 10px;
    border-radius: 50px;
  }
  .ticket-content {
    margin-top: 20px;
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 10px;
  }
  .profile-pic {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
    margin: 10px auto;
  }
  .btn-view-profile {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 5px 15px;
    font-size: 0.8rem;
    margin-top: 10px;
  }
  .match-box {
  border: 2px solid #4CAF50; /* Couleur de bordure verte pour correspondre au thème */
  background-color: #f9fff9; /* Un arrière-plan légèrement différent pour la boîte */
  border-radius: 10px; /* Bords arrondis pour la boîte */
  padding: 10px; /* Espacement à l'intérieur de la boîte */
  margin-top: 20px; /* Espacement au-dessus de la boîte */
  box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Légère ombre pour un effet en profondeur */
}
.datetime-info p {
  font-family: 'Arial', sans-serif; /* Exemple de police */
  font-size: 1.2rem; /* Taille de la police */
  display: inline-block; /* Assure que les éléments sont sur la même ligne */
}





  /* style="background-image: url('C:\Users\TouTa\Downloads\herbe-verte-ultra-detaillee-eclairage-cinematographique-stade-football.jpg');" */
</style>
</head>
<body>

<div class="container" >
  <div class="ticket-wrapper" >
    <div class="ticket-header">
      <span class="badge"><i class="fas fa-ban"></i> N'existe pas</span>
    </div>
    <div class="ticket-content">
      <div class="row">
        
<br><br>
<br>

<br>

      <div class="score">
        <img src= "assets/ballon-removebg-preview.png" alt="USM Logo" class="team-logo" style="width: 60%; margin-left: 80px;">

      </div>
      
      <br><br>
      <br>
      <br>
      

     

    </div>
    <div class="ticket-footer text-center mt-3">
      <p style="color: #fff;">TICKET N°: 012578995</p>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
