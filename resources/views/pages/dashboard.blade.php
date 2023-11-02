@extends('pages.cpanel')

@section('content')

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
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>
        
        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>

        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>

        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>
        
        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>

        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>

        <tr>
            <td width="60px">
                <div class="imgBox"><img src="/assets/img/finn.jpg" ></div>
            </td>
            <td>
                <h4>David Wilson <br> <span>Polandia</span></h4>
            </td>
        </tr>
    </table>
    </div>
</div>
</div>
@endsection