package com.example.chandan.ngoapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.View;

import maes.tech.intentanim.CustomIntent;

public class PODashboard extends BaseActivity {
    private CardView viewreq;
    private CardView addPrice;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_podashboard);

        viewreq = findViewById(R.id.viewreq);
        addPrice = findViewById(R.id.addPrice);
        viewreq.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent( PODashboard.this, ViewPOActivity.class);
                i.putExtra("flag",0);
                startActivity(i);
                CustomIntent.customType(PODashboard.this,"left-to-right");

            }
        });

        addPrice.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(PODashboard.this, ViewPOActivity.class);
                i.putExtra("flag",1);
                startActivity(i);
                CustomIntent.customType(PODashboard.this,"left-to-right");
            }
        });

    }
}
