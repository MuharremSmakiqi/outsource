<style>
    .mt-60{
        margin-top:60px;
    }

    .section-block-grey {
        padding: 90px 0px 90px 0px;
     background: rgb(235,236,202);
    background: linear-gradient(0deg, rgba(235,236,202,0.7903536414565826) 0%, rgba(255,255,255,1) 100%);
    }

    .serv-section-2 {
        position: relative;
        border: 1px solid #eee;
        background: #fff;
        box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.16);
        border-radius: 5px;
        overflow: hidden;
        padding: 30px;
    }

    .serv-section-2:before {
        position: absolute;
        top: 0;
        right: 0px;
        z-index: 0;
        content: " ";
        width: 120px;
        height: 120px;
        background: #f5f5f5;
        border-bottom-left-radius: 136px;
        transition: all 0.4s ease-in-out;
        -webkit-transition: all 0.4s ease-in-out;
    }

    .serv-section-2-icon {
        position: absolute;
        top: 18px;
        right: 22px;
        max-width: 100px;
        z-index: 1;
        text-align: center;
    }

    .serv-section-2-icon i {
        color: #336278;
        font-size: 48px;
        line-height: 65px;
        transition: all 0.4s ease-in-out;
        -webkit-transition: all 0.4s ease-in-out;
    }

    .serv-section-desc {
        position: relative;
    }

    .serv-section-2 h4 {
        color: #333;
        font-size: 20px;
        font-weight: 500;
        line-height: 1.5;
    }

    .serv-section-2 h5 {
        color: #333;
        font-size: 17px;
        font-weight: 400;
        line-height: 1;
        margin-top: 5px;
    }

    .section-heading-line-left {
        content: '';
        display: block;
        width: 230px;
        height: 3px;
        background: #336278;
        border-radius: 25%;
        margin-top: 15px;
        margin-bottom: 5px;
    }

    .serv-section-2 p {
        margin-top: 25px;
        padding-right: 50px;
    }

    .serv-section-2:hover .serv-section-2-icon i {
        color: #fff;
    }

    .serv-section-2:hover:before {
        background: #336278;
    }    
</style> 
 
 <div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder"> 
            <h4 class="text-left">STAFFING OPTIONS</h4>
            <div class="section-heading-line-left"></div>
        </div>
        
		<div class="row mt-60">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 pb-2">
                <a href="/staffing-options#it">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-laptop-code"></i> </div>
                    <div class="serv-section-desc">
                        <h4>IT</h4>
                          </div>
                    <div class="section-heading-line-left"></div> 
                </div>
                   </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 pb-2">
                <a href="/staffing-options#accounts">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-hand-holding-usd"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Accounts </h4>
                        </div>
                    <div class="section-heading-line-left"></div> 
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 pb-2">
                <a href="/staffing-options#design">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"><i class="fas fa-cubes"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Design </h4>
                        </div>
                    <div class="section-heading-line-left"></div> 
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12 pb-2">
                <a href="/staffing-options#admin">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-server"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Admin</h4>
                       </div>
                    <div class="section-heading-line-left"></div> 
                </div>
                </a>
            </div>
        </div>
    </div>
</div>