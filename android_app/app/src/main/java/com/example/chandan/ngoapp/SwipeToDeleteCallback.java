package com.example.chandan.ngoapp;

import android.content.Context;
import android.graphics.Canvas;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.helper.ItemTouchHelper;
import android.util.Log;
import android.view.MotionEvent;
import android.view.View;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

import es.dmoral.toasty.Toasty;

import static android.support.v7.widget.helper.ItemTouchHelper.ACTION_STATE_SWIPE;

public class SwipeToDeleteCallback extends ItemTouchHelper.SimpleCallback {

    private AssetAdapter adapter; // this will be your recycler adapter
    private Context context;
    private DatabaseReference root = FirebaseDatabase.getInstance().getReference("assets");
    private int flag;
    private boolean swipeBack;
    public SwipeToDeleteCallback(int dragDirs, int swipeDirs, AssetAdapter adapter, Context c, int flag) {
        super(dragDirs, swipeDirs);
        this.adapter = adapter;
        this.context = c;
        this.flag = flag;
    }

    @Override
    public boolean onMove(RecyclerView recyclerView, RecyclerView.ViewHolder viewHolder, RecyclerView.ViewHolder target) {
        return false;
    }

    @Override
    public void onSwiped(RecyclerView.ViewHolder viewHolder, int direction) {
        int position = viewHolder.getAdapterPosition(); // this is how you can get the position
//        adapter. // You will have your own class ofcourse.
        Asset asset = adapter.getAssetOb().get(position);
        Log.d("", "onSwiped: " + asset.toString());
        if (flag == 0) {
            if (asset.getStatus().equals("REQUESTED")) {
                root.child(asset.getParentkey()).child("status").setValue("DISAPPROVED");
                Toasty.error(context, "Disapproved", Toast.LENGTH_LONG).show();
            } else {

            }
        } else {
            if (asset.getStatus().equals("APPROVEDPO")) {
                root.child(asset.getParentkey()).child("status").setValue("DISAPPROVED");
                Toasty.error(context, "Disapproved", Toast.LENGTH_LONG).show();
            }
        }
    }
//    @Override
//    public void onChildDraw(Canvas c,
//                            RecyclerView recyclerView,
//                            RecyclerView.ViewHolder viewHolder,
//                            float dX, float dY,
//                            int actionState, boolean isCurrentlyActive) {
//
//        if (actionState == ACTION_STATE_SWIPE) {
//            setTouchListener(c, recyclerView, viewHolder, dX, dY, actionState, isCurrentlyActive);
//        }
//        super.onChildDraw(c, recyclerView, viewHolder, dX, dY, actionState, isCurrentlyActive);
//    }
//
//    @Override
//    public int convertToAbsoluteDirection(int flags, int layoutDirection) {
//        if (swipeBack) {
//            swipeBack = false;
//            return 0;
//        }
//        return super.convertToAbsoluteDirection(flags, layoutDirection);
//    }
//
//    private void setTouchListener(Canvas c,
//                                  RecyclerView recyclerView,
//                                  RecyclerView.ViewHolder viewHolder,
//                                  float dX, float dY,
//                                  int actionState, boolean isCurrentlyActive) {
//
//        recyclerView.setOnTouchListener(new View.OnTouchListener() {
//            @Override
//            public boolean onTouch(View v, MotionEvent event) {
//                swipeBack = event.getAction() == MotionEvent.ACTION_CANCEL || event.getAction() == MotionEvent.ACTION_UP;
//                return false;
//            }
//        });
}

