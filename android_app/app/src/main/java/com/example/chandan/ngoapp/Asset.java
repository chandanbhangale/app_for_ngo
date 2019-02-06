package com.example.chandan.ngoapp;

public class Asset {

    private String title;
    private int quantity;
    private String barcode;
    private String status;
    private String userId;
    private String branch;
    private String parentkey;
    private String date;
    private int price;

    public Asset(String title, int quantity, String barcode, String status, String userId, String branch,String parentkey,String date,int price) {
        this.title = title;
        this.quantity = quantity;
        this.barcode = barcode;
        this.status = status;
        this.userId = userId;
        this.branch = branch;
        this.parentkey = parentkey;
        this.date = date;
        this.price = price;
    }

    public Asset(){}

    public int getPrice() {
        return price;
    }

    public void setPrice(int price) {
        this.price = price;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getTitle() {
        return title;
    }

    public String getParentkey() {
        return parentkey;
    }

    public void setParentkey(String parentkey) {
        this.parentkey = parentkey;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public String getBarcode() {
        return barcode;
    }

    public void setBarcode(String barcode) {
        this.barcode = barcode;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public String getUserId() {
        return userId;
    }

    public void setUserId(String userId) {
        this.userId = userId;
    }

    public String getBranch() {
        return branch;
    }

    public void setBranch(String branch) {
        this.branch = branch;
    }

    @Override
    public String toString() {
        return super.toString();
    }
}
