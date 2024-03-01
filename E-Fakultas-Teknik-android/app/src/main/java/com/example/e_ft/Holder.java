package com.example.e_ft;

import android.content.Context;
import android.view.View;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

public class Holder extends RecyclerView.ViewHolder {

    View view;
    public Holder(@NonNull View itemView) {
        super(itemView);

        view=itemView;


    }

    public void setView(Context context, String judul_info){

        TextView judul=view.findViewById(R.id.judul);

        judul.setText(judul_info);
    }
}
