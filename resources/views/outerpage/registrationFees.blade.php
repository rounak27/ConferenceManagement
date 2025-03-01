@extends('outerpage.mainlayoutinnerpage')
@section('css')
    <style>
        
       
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #ccc;
        }
        .note {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
@endsection
@section('content')


<main id="main" class="main-page">
    <!--==========================
    Registration Fees Section
  ============================-->
    <section id="registrationFees" class="wow fadeIn">
    <div class="container">
    <div class="section-header " style="margin-bottom:5px;margin-top:5px;">
            
            <h2>REGISTRATION FEES FOR ATTENDING NEPCON-2025 </h2>

            
          <p>(22<sup>ND</sup>, 23<sup>RD</sup> & 24<sup>TH</sup> MAY)</p>
        </div>
        
        <div class="table-responsive">
        <table>
            <tr>
                <th>CAT</th>
                <th>GROUP</th>
                <th>UPTO 30<sup>TH</sup> APRIL</th>
                <th>UPTO 15<sup>TH</sup> MAY</th>
                <th>SPOT</th>
            </tr>
            <tr>
                <td>1</td>
                <td>NEPAS MEMBERS SENIOR CITIZEN (>70 YEARS)</td>
                <td>FREE</td>
                <td>FREE</td>
                <td>FREE</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ALL OTHER NEPAS MEMBERS</td>
                <td>10,000/-</td>
                <td>12,000/-</td>
                <td>14,000/-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>NON NEPAS MEMBERS (PAEDIATRICIANS)</td>
                <td>14,000/-</td>
                <td>16,000/-</td>
                <td>18,000/-</td>
            </tr>
            <tr>
                <td>4</td>
                <td>NON NEPAS MEMBERS (OTHERS)</td>
                <td>12,000/-</td>
                <td>14,000/-</td>
                <td>16,000/-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>PG & UG/MO STUDENTS/INTERNS/NURSES</td>
                <td>5,000/-</td>
                <td>6,000/-</td>
                <td>7,000/-</td>
            </tr>
            <tr>
                <td>6</td>
                <td>SAARC DELEGATES</td>
                <td>$125</td>
                <td>$150</td>
                <td>$200</td>
            </tr>
            <tr>
                <td>7</td>
                <td>INTERNATIONAL DELEGATES</td>
                <td>$250</td>
                <td>$300</td>
                <td>$400</td>
            </tr>
            <tr>
                <td>8</td>
                <td>CORPORATE REGISTRATION</td>
                <td>15,000/-</td>
                <td>18,000/-</td>
                <td>22,000/-</td>
            </tr>
            <tr>
                <td>9</td>
                <td>ACCOMPANYING MEMBERS</td>
                <td colspan="3">Free entry with Lunch coupon @ 3000/-</td>
            </tr>
        </table>
        </div>
        <div class="section-header hide " style="margin-bottom:5px;margin-top:5px;">
        <h2>REGISTRATION FEES FOR ATTENDING WORKSHOP (21<sup>ST</sup> MAY 2025)</h2>
        </div>
        <div class="table-responsive hide">
        <table>
            <tr>
                <th>CAT</th>
                <th>GROUP</th>
                <th>UPTO APRIL 30<sup>TH</sup></th>
                <th>UPTO MAY 15<sup>TH</sup></th>
                <th>SPOT</th>
            </tr>
            <tr>
                <td>1</td>
                <td>NEPAS MEMBERS</td>
                <td>3,000/-</td>
                <td>4,000/-</td>
                <td>5,000/-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>NON NEPAS MEMBERS</td>
                <td>4,000/-</td>
                <td>5,000/-</td>
                <td>6,000/-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>PG & UG/MO STUDENTS/INTERNS/NURSES</td>
                <td>2,000/-</td>
                <td>3,000/-</td>
                <td>4,000/-</td>
            </tr>
            <tr>
                <td>4</td>
                <td>CORPORATE REGISTRATION</td>
                <td>5,000/-</td>
                <td>8,000/-</td>
                <td>10,000/-</td>
            </tr>
        </table>
        </div>
        
        <p class="note hide"><strong>NOTE:</strong> WORKSHOP REGISTRATION FEES MAY CHANGE DEPENDING UPON THE NATURE OF WORKSHOP.</p>
        <p class="note hide "><strong>CAT:</strong> CATEGORY NUMBER</p>
    </div>
    </section>
</main>
@endsection
