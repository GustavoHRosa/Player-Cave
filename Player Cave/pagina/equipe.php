 <style>
  
  body{
    background-color: #222;
    padding-top: 100px;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

        .card {
            background-color: #222;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            flex: 1 1 300px;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .card-header i {
            margin-right: 5px;
        }
        .card-body {
            padding: 20px;
        }
        .card-body h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .card-body p {
            color: #ffffff;
            margin-bottom: 15px;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>


<div class="container">
    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Gustavo
        </div>
        <div class="card-body">
            <img src="assets/gustavo.png" alt="Gustavo">
            <h3>Desenvolvedor do Time Sprint</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Milena
        </div>
        <div class="card-body">
            <img src="assets/Milena.png" alt="Foto de Maria Souza">
            <h3>Desenvolvedora do Galactic Attack</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Paulo
        </div>
        <div class="card-body">
            <img src="assets/Paulo.png" alt="Foto de Pedro Almeida">
            <h3>Desenvolvedor do Birdy</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Patrick
        </div>
        <div class="card-body">
            <img src="assets/Patrick.png" alt="Foto de Ana Oliveira">
            <h3>Desenvolvedor do WildWest</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Maria
        </div>
        <div class="card-body">
            <img src="assets/menina.png" alt="Foto de Carlos Lima">
            <h3>Desenvolvedora do Escape From Space</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Felipe
        </div>
        <div class="card-body">
            <img src="assets/Felipe.png" alt="Foto de Marina Santos">
            <h3>Desenvolvedor do Souls in the Dark</h3>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fab fa-github"></i> Rodrigo
        </div>
        <div class="card-body">
            <img src="assets/Rodrigo.png" alt="Rodrigo">
            <h3>Desenvolvedor do Submarine Adventure</h3>

        </div>
    </div>
</div>