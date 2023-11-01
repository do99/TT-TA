<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tempat Transit | CPanel</title>

    {{-- ===== Styles CSS ===== --}}
    <link rel="stylesheet" href="assets/css/style.css">
    @vite('resources/css/app.css')

</head>
<body>

    {{-- ============= Navigation ============== --}}
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon">
                            <img src="/assets/img/tt2.png" class="w-46">
                        </span>
                        <span class="title">
                            <img src="/assets/img/tt1.png" class="w-46">
                        </span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="map-outline"></ion-icon></span> 
                        <span class="title"> Project & Order</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                        <span class="title">Sign-Out</span>
                    </a>
                </li>

            </ul>
        </div>

        {{-- ==== Main ==== --}}
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu"></ion-icon>
                </div>

                <div class="search">
                    <label for="">
                        <input type="tex" placeholder="Search Here">
                        <ion-icon name="search"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/img/finn.jpg" alt="">
                </div>
            </div>

            {{-- ==== Cards ==== --}}
            <div class="cardBox">
                <div class="card">
                    <div>   
                        <div class="numbers">24</div>
                        <div class="cardName">Projects</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="library-outline"></ion-icon>
                    </div>
                </div>
                
                <div class="card">
                    <div>   
                        <div class="numbers">24</div>
                        <div class="cardName">Client</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>   
                        <div class="numbers">32</div>
                        <div class="cardName">Task</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="receipt-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>   
                        <div class="numbers">21</div>
                        <div class="cardName">Employees</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="accessibility-outline"></ion-icon>
                    </div>
                </div>
            </div>

            {{-- === Order List === --}}

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Order</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Client</td>
                                <td>Projects</td>
                                <td>Project Manager</td>
                                <td>Programer</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status inProgress">Progress</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status inProgress">Progress</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <td>Rudi</td>
                                <td>Mobile Apps</td>
                                <td>Wilson</td>
                                <td>El Gato</td>
                                <td><span class="status inProgress">Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- === New Client === --}}

                <div class="recentCostumers">
                    <div class="cardHeader">
                        <h2>Recent Costumer</h2>
                    </div>
                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>
                    
                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBox"><img src="assets/img/finn.jpg" ></div>
                        </td>
                        <td>
                            <h4>David Wilson <br> <span>Polandia</span></h4>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>

    {{-- ==== Script ==== --}}
    <script src="assets/js/main.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>