package com.example.chandan.ngoapp;

import android.content.Intent;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.helper.ItemTouchHelper;
import android.util.Log;
import android.view.View;
import android.widget.Toast;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;

import maes.tech.intentanim.CustomIntent;

public class PrincViewActivity extends AppCompatActivity {
    private static final String TAG ="PrincViewActivity" ;
    private DatabaseReference mDatabaseRef;
    private FirebaseAuth auth;
    private RecyclerView recyclerView;
    private AssetAdapter adapter;
    private ArrayList<Asset> list;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_status);

        Intent i = getIntent();
        final String branch = i.getStringExtra("branch");
        Toast.makeText(this,branch,Toast.LENGTH_LONG).show();
        auth = FirebaseAuth.getInstance();
        list = new ArrayList<>();
        mDatabaseRef = FirebaseDatabase.getInstance().getReference("assets");

        Log.d(TAG, "onCreate: HERE====================================");
        mDatabaseRef.addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(@NonNull DataSnapshot dataSnapshot) {
                list.clear();
                for (DataSnapshot d : dataSnapshot.getChildren()) {
                    Asset asset = d.getValue(Asset.class);
//                    Log.d(TAG, "onDataChange: " + asset.getUserId());
                    if(asset.getBranch().equals(branch) && asset.getStatus().equals("APPROVEDPO")){
                        list.add(asset);
                    }else{
                        continue;
                    }
                }

                adapter.notifyDataSetChanged();

            }
            @Override
            public void onCancelled(@NonNull DatabaseError databaseError) {

            }
        });

        recyclerView = (RecyclerView) findViewById(R.id.recycler_view);
        LinearLayoutManager layoutManager = new LinearLayoutManager(this);
        recyclerView.setLayoutManager(layoutManager);
        adapter = new AssetAdapter(this, list, 2);
        recyclerView.setAdapter(adapter);
        ItemTouchHelper.SimpleCallback swipeToDeleteCallback = new
                SwipeToDeleteCallback(0, ItemTouchHelper.RIGHT, adapter, this, 1); // Making the SimpleCallback

        ItemTouchHelper touchHelper = new ItemTouchHelper(swipeToDeleteCallback);

        touchHelper.attachToRecyclerView(recyclerView);
    }


    @Override
    public void onBackPressed() {
        super.onBackPressed();
        CustomIntent.customType(this,"right-to-left");

    }
}