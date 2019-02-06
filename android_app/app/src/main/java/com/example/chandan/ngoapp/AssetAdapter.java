package com.example.chandan.ngoapp;

import android.content.Context;
import android.graphics.Color;
import android.support.annotation.NonNull;
import android.support.v7.widget.RecyclerView;
import android.text.InputType;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.afollestad.materialdialogs.DialogAction;
import com.afollestad.materialdialogs.MaterialDialog;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

import java.util.ArrayList;

import es.dmoral.toasty.Toasty;

public class AssetAdapter extends RecyclerView.Adapter<AssetAdapter.AssetHolder> {
    private static final String TAG = "AssetAdapter";
    private Context mContext;
    private FirebaseDatabase firebaseDatabase;
    private DatabaseReference databaseReference;
    private FirebaseAuth auth;
    private ArrayList<Asset> mlist;
    private int flag ;
    private Asset asset;
    private FirebaseUser firebaseUser;
    private String pk;
    public AssetAdapter(Context context, ArrayList<Asset> list, int flag) {
        mContext = context;
        auth = FirebaseAuth.getInstance();
        databaseReference = FirebaseDatabase.getInstance().getReference("assets");
        mlist = list;
        this.flag = flag;


//        Log.d(TAG, "AssetAdapter: " + String.valueOf(mlist.size()));
    }

    @Override
    public AssetHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        Log.d(TAG, "onCreateViewHolder: called");
        Log.d(TAG, "onCreateViewHolder: GOT REQUEST CALLED===================");
        LayoutInflater layoutInflater = LayoutInflater.from(mContext);
        View view = layoutInflater.inflate(R.layout.status_cardview, parent, false);
        return new AssetHolder(view);

    }

    @Override
    public void onBindViewHolder(final AssetHolder holder, final int position) {
        if (mlist.size()!=0) {
//            Log.d(TAG, "onBindViewHolder: called" + String.valueOf(position))
            asset = mlist.get(holder.getAdapterPosition());
            holder.assetName.setText("Title - "+ mlist.get(holder.getAdapterPosition()).getTitle());
            holder.assetQuantity.setText("Quantity - "+String.valueOf(mlist.get(holder.getAdapterPosition()).getQuantity()));
            String status = mlist.get(holder.getAdapterPosition()).getStatus();
            holder.date.setText(mlist.get(holder.getAdapterPosition()).getDate());
            if(status.equals("REQUESTED")){
                holder.status.setBackgroundColor(Color.RED);
            }else if(status.equals("APPROVEDPO")){
                holder.status.setBackgroundColor(Color.YELLOW);
            }else if(status.equals("DISAPPROVED")){
                holder.status.setBackgroundColor(Color.BLACK);
            }else if(status.equals("APPROVED")){
                holder.status.setBackgroundColor(Color.GREEN);
            }

            if (flag==1){
                //Called by PO
                holder.itemView.setOnLongClickListener(new View.OnLongClickListener() {
                    @Override
                    public boolean onLongClick(View v) {
                        pk = mlist.get(holder.getAdapterPosition()).getParentkey();
//                        Toast.makeText(mContext, pk + "dfsdfnkwfnuefer",Toast.LENGTH_LONG).show();
                        if (mlist.get(holder.getAdapterPosition()).getStatus().equals("REQUESTED")) {
                            databaseReference.child(pk).child("status").setValue("APPROVEDPO");
                            Toasty.success(mContext, "Approved", Toast.LENGTH_SHORT).show();
                            notifyDataSetChanged();
                        }
                        return true;

                    }
                });

//                holder.itemView.setOnClickListener(new View.OnClickListener() {
//                    @Override
//                    public void onClick(View v) {
//
//
//                        if (mlist.get(holder.getAdapterPosition()).getStatus().equals("REQUESTED")) {
//                            new MaterialDialog.Builder(mContext)
//                                    .title("Add Price")
//                                    .content("Add price for a single unit")
//                                    .inputType(InputType.TYPE_CLASS_NUMBER)
//                                    .positiveText("Confirm")
//                                    .negativeText("Cancel")
//                                    .input("Weken", "", new MaterialDialog.InputCallback() {
//                                        @Override
//                                        public void onInput(MaterialDialog dialog, CharSequence input) {
//                                            Log.d(TAG, "onInput: " + pk);
//                                            databaseReference.child(pk).child("price").setValue(Integer.parseInt(input.toString()));
//                                            Toasty.success(mContext, "Price Added", Toast.LENGTH_SHORT).show();
//                                            notifyDataSetChanged();
//                                        }
//                                    })
//                                    .onPositive(new MaterialDialog.SingleButtonCallback() {
//                                        @Override
//                                        public void onClick(@NonNull MaterialDialog dialog, @NonNull DialogAction which) {
//                                        }
//                                    })
//                                    .onNegative(new MaterialDialog.SingleButtonCallback() {
//                                        @Override
//                                        public void onClick(@NonNull MaterialDialog dialog, @NonNull DialogAction which) {
//                                            System.out.println("You clicked negative");
//                                        }
//                                    })
//                                    .onNeutral(new MaterialDialog.SingleButtonCallback() {
//                                        @Override
//                                        public void onClick(@NonNull MaterialDialog dialog, @NonNull DialogAction which) {
//                                            System.out.println("You clicked neutral");
//                                        }
//                                    }).show();
//                        }
//
//                    }
//                });


            }else if(flag==2){
                holder.itemView.setOnLongClickListener(new View.OnLongClickListener() {
                    @Override
                    public boolean onLongClick(View v) {
                        String pk = mlist.get(holder.getAdapterPosition()).getParentkey();
//                        Toast.makeText(mContext, pk + "dfsdfnkwfnuefer",Toast.LENGTH_LONG).show();
                        if (mlist.get(holder.getAdapterPosition()).getStatus().equals("APPROVEDPO")) {
                            databaseReference.child(pk).child("status").setValue("APPROVED");
                            Toasty.success(mContext, "Approved", Toast.LENGTH_SHORT).show();
                            notifyDataSetChanged();
                        }
                        return true;

                    }
                });

                holder.itemView.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        new MaterialDialog.Builder(mContext)
                                .title("Request Summary")
                                .content("Title - "+ mlist.get(holder.getAdapterPosition()).getTitle() + "\n"+
                                        "Quantity - " + String.valueOf(mlist.get(holder.getAdapterPosition()).getQuantity()) + "\n" +
                                        "Barcode Info - " + mlist.get(holder.getAdapterPosition()).getBarcode()+ "\n"+
                                        "Date - " + mlist.get(holder.getAdapterPosition()).getDate() + "\n" +
                                        "UserId - "+mlist.get(holder.getAdapterPosition()).getUserId())
                                .positiveText("Okay")
                                .show();
                    }
                });

            }
        }
        else{

        }
    }

    @Override
    public int getItemCount() {
        return mlist.size();
    }

    class AssetHolder extends RecyclerView.ViewHolder {

        TextView assetName;
        TextView assetQuantity;
        TextView status;
        TextView date;

        public AssetHolder(View itemView) {
            super(itemView);
            assetName = itemView.findViewById(R.id.tv_title);
            assetQuantity = itemView.findViewById(R.id.tv_content);
            status = itemView.findViewById(R.id.status);
            date = itemView.findViewById(R.id.tv_date);
        }

    }

    public ArrayList<Asset> getAssetOb(){
        return mlist;
    }
}
