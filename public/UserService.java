package com.CiptaSolutindo.CST.MenjanganenamMobile.Api;

import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Account.AccountActivationRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Account.AccountActivationResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.ChangePasswordResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.CheckTokenResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.LoginOTPRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.LoginOTPResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.LoginRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.LoginResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PLNPrepaid.PPOBPLNPrepaidPaymentResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PLNPrepaid.PPOBPLNPrepaidProductObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PLNPrepaid.PPOBPLNPrepaidProductRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Login.LogoutResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBBPJS.PPOBBPJSKesehatanPaymentResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBBPJS.PPOBBPJSKesehatanProductObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBBPJS.PPOBBPJSKesehatanProductRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBGame.PPOBTopUpEMoneyCategoryObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBGame.PPOBTopUpEMoneyPaymentResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBGame.PPOBTopUpEMoneyProductObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBGame.PPOBTopUpEMoneyProductRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPLNPostpaid.PPOBPLNPostpaidObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPLNPostpaid.PPOBPLNPostpaidPaymentResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPLNPostpaid.PPOBPLNPostpaidRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBHistory.PPOBHistoryInOutObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBHistory.PPOBHistoryObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPulsa.PPOBPulsaPrepaidObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPulsa.PPOBPulsaPrepaidPaymentResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.PPOBPulsa.PPOBPulsaPrepaidRequest;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.Program.CoreProgramResponse;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.SavingAccount.AcctSavingsAccountObject;
import com.CiptaSolutindo.CST.MenjanganenamMobile.Api.SavingAccount.AcctSavingsAccountRequest;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.Header;
import retrofit2.http.Headers;
import retrofit2.http.POST;
import retrofit2.http.PUT;
import retrofit2.http.Path;

public interface UserService {
    @POST("login")
    Call<LoginResponse> userLogin(@Body LoginRequest loginRequest);

    @POST("whatsapp-otp/verification")
    Call<LoginOTPResponse> userLoginOTP(@Body LoginOTPRequest loginOTPRequest);

    @Headers({"Accept:application/json"})
    @GET("whatsapp-otp/resend/{member_no}")
    Call<LoginOTPResponse> resendOTP(@Path("member_no") String member_no);

    @Headers({"Accept:application/json"})
    @POST("logout")
    Call<LogoutResponse> userLogout(@Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @GET("logout-expired/{member_no}")
    Call<LogoutResponse> logoutExpired(@Path("member_no") String member_no);

    @Headers({"Accept:application/json"})
    @GET("member/otp/{member_no}")
    Call<LogoutResponse> otpSuccess(@Path("member_no") String member_no, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @PUT("member/password/{member_id}")
    Call<ChangePasswordResponse> changePassword(@Body LoginRequest loginRequest, @Path("member_id") String member_id, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @PUT("member/password-transaction/{member_id}")
    Call<ChangePasswordResponse> changePasswordTransaction(@Body LoginRequest loginRequest, @Path("member_id") String member_id, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @GET("member/{member_no}")
    Call<CheckTokenResponse> checkToken(@Path("member_no") String member_no, @Header("Authorization") String AuthHeader);

    /*@POST("loginOTP")
    Call<LoginOTPResponse> userLoginOTP(@Body LoginOTPRequest loginOTPRequest);*/

    @GET("core-program")
    Call<CoreProgramResponse> coreProgram();

    @POST("savings-account")
    Call<AcctSavingsAccountObject> acctSavingsAccount(@Body AcctSavingsAccountRequest acctSavingsAccountRequest, @Header("Authorization") String AuthHeader);
// chek
    @Headers({"Accept:application/json"})
    @POST("ppob/emoney/product")
    Call<PPOBTopUpEMoneyProductObject> ppobTopUpEMoneyProduct (@Body PPOBTopUpEMoneyProductRequest ppobTopUpEMoneyProductRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/emoney/payment")
    Call<PPOBTopUpEMoneyPaymentResponse> ppobTopUpEMoneyPayment (@Body PPOBTopUpEMoneyProductRequest ppobTopUpEMoneyProductRequest, @Header("Authorization") String AuthHeader);

// chek
    @Headers({"Accept:application/json"})
    @POST("ppob/pulsa/prepaid")
    Call<PPOBPulsaPrepaidObject> ppobPulsaPrepaid (@Body PPOBPulsaPrepaidRequest ppobPulsaPrepaidRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/pulsa/prepaid/payment")
    Call<PPOBPulsaPrepaidPaymentResponse> ppobPulsaPrepaidPayment (@Body PPOBPulsaPrepaidRequest ppobPulsaPrepaidRequest, @Header("Authorization") String AuthHeader);

// chek
    @Headers({"Accept:application/json"})
    @GET("ppob/emoney/category") 
    Call<PPOBTopUpEMoneyCategoryObject> ppobTopUpEMoneyCategory (@Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/bpjs")
    Call<PPOBBPJSKesehatanProductObject> ppobBPJSKesehatanProduct (@Body PPOBBPJSKesehatanProductRequest ppobBPJSKesehatanProductRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/bpjs/payment")
    Call<PPOBBPJSKesehatanPaymentResponse> ppobBPJSKesehatanPayment (@Body PPOBBPJSKesehatanProductRequest ppobbpjsKesehatanProductRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/pln/postpaid")
    Call<PPOBPLNPostpaidObject> ppobPLNPostpaidProduct (@Body PPOBPLNPostpaidRequest ppobPLNPostpaidRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/pln/postpaid/payment")
    Call<PPOBPLNPostpaidPaymentResponse> ppobPLNPostpaidPayment (@Body PPOBPLNPostpaidRequest ppobPLNPostpaidRequest, @Header("Authorization") String AuthHeader);

    @POST("ppob/pln/prepaid")
    Call<PPOBPLNPrepaidProductObject> ppobPLNPrepaidProduct (@Body PPOBPLNPrepaidProductRequest ppobplnPrepaidProductRequest, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @POST("ppob/pln/prepaid/payment")
    Call<PPOBPLNPrepaidPaymentResponse> ppobPLNPrepaidPayment (@Body PPOBPLNPrepaidProductRequest ppobplnPrepaidProductRequest, @Header("Authorization") String AuthHeader);


    @Headers({"Accept:application/json"})
    @GET("ppob-transaction/success/{member_id}")
    Call<PPOBHistoryObject> ppobHistorySuccess(@Path("member_id") String member_id, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @GET("ppob-transaction/fail/{member_id}")
    Call<PPOBHistoryObject> ppobHistoryFail(@Path("member_id") String member_id, @Header("Authorization") String AuthHeader);


    @Headers({"Accept:application/json"})
    @GET("ppob-transaction/in-history/{member_id}")
    Call<PPOBHistoryInOutObject> ppobHistoryIn(@Path("member_id") String member_id, @Header("Authorization") String AuthHeader);

    @Headers({"Accept:application/json"})
    @GET("ppob-transaction/out-history/{member_id}")
    Call<PPOBHistoryInOutObject> ppobHistoryOut(@Path("member_id") String member_id, @Header("Authorization") String AuthHeader);

// chek
    @POST("register")
    Call<AccountActivationResponse> accountActivation(@Body AccountActivationRequest accountActivationRequest);

}


