package com.example.chandan.ngoapp;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

import es.dmoral.toasty.Toasty;
import maes.tech.intentanim.CustomIntent;

public class RequestAsset extends AppCompatActivity {
    private Button request;
    private Button btnBarcode;
    private IntentIntegrator qrScan;
    private String barcodeInfo = "";
    private FirebaseDatabase firebaseDatabase;
    private DatabaseReference databaseReference;
    private FirebaseAuth auth;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_request_asset);
        final EditText etAsset = findViewById(R.id.etAssetRequired);
        final EditText etQuant = findViewById(R.id.etQuantityRequired);

        final SharedPreferences pref = getApplicationContext().getSharedPreferences("MyPref", MODE_PRIVATE);
        final SharedPreferences.Editor editor = pref.edit();

        request = findViewById(R.id.btnFacultyRequest);
        btnBarcode = findViewById(R.id.btnScanBarcode);
        qrScan = new IntentIntegrator(this);
        firebaseDatabase = FirebaseDatabase.getInstance();
        databaseReference = firebaseDatabase.getReference();
        auth = FirebaseAuth.getInstance();
        final String userId = auth.getUid();


        btnBarcode.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                qrScan.initiateScan();

            }
        });

        request.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int x = Integer.parseInt(etQuant.getText().toString());
                String key = databaseReference.push().getKey();
//                Toast.makeText(RequestAsset.this,key+ " fd", Toast.LENGTH_LONG).show();
                DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy HH:mm:ss");
                Date date = new Date();
                String strDate = dateFormat.format(date);
                Asset asset= new Asset(etAsset.getText().toString(),x, barcodeInfo,"REQUESTED", userId,pref.getString("department", null),key,strDate,0);

                databaseReference.child("assets").child(key).setValue(asset);
                databaseReference.child("users").child(userId).child(databaseReference.push().getKey()).child("assetkey").setValue(key);
                etAsset.setText("");
                etQuant.setText("");
                barcodeInfo = "";

                Toasty.success(RequestAsset.this, "Request Submitted!", Toast.LENGTH_SHORT, true).show();
            }
        });


    }


    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);
        if (result != null) {
            //if qrcode has nothing in it
            String qrCodeData = result.getContents();
            if (qrCodeData == null) {
                Toast.makeText(this, "Result Not Found", Toast.LENGTH_LONG).show();
            } else {
                barcodeInfo = qrCodeData;
//                Toast.makeText(this, qrCodeData, Toast.LENGTH_LONG).show();
            }
        } else {
            super.onActivityResult(requestCode, resultCode, data);
        }
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        CustomIntent.customType(this,"right-to-left");

    }
}
