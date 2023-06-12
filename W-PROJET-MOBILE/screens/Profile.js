import { Image, Text, View, TouchableOpacity } from "react-native";
import { AntDesign } from "@expo/vector-icons";
import { Entypo } from "@expo/vector-icons";
import { Ionicons } from "@expo/vector-icons";
import { useState, useEffect } from "react";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";
import moment from "moment";

export default function Profile({ navigation }) {
    const [user, setUser] = useState([]);

    useEffect(() => {
        fetchData();
    }, []);
    const fetchData = async () => {
        try {
            getUserinfo();
        } catch (error) {
            navigation.navigate("Login");
        }
    };
    /**
     * This function retrieves user information from an API using a token for authorization and sets the
     * user state, or navigates to the login screen if there is an error.
     * @returns If an error occurs, the function will navigate to the "Login" screen and return an empty
     * array. If there is no error, the function will set the user state to the data retrieved from the
     * API. However, since there is no explicit return statement in this function, it will implicitly
     * return undefined.
     */
    const getUserinfo = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            if (!token) {
                navigation.navigate("Login");
            }
            const response = await axios.get(`${API_BASE_URL}/api/userinfo`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            setUser(response.data.user);
        } catch (error) {
            navigation.navigate("Login");
            return [];
        }
    };
    const handelLogOut = async () => {
        await SecureStore.deleteItemAsync("token");
        navigation.navigate("Login");
    };
    return (
        <View
            className="flex-1 pt-16  "
            style={{
                backgroundColor: "#1E1E1E",
            }}
        >
            <View className="items-center align-middle ">
                <Image
                    source={require("../assets/HSE-2.2png.png")}
                    className="  h-60 w-full rotate-180 rounded-full  from-neutral-50 drop-shadow-xl"
                />
            </View>
            <Text className="mt-5 self-center text-2xl font-bold text-white">
                Profile
            </Text>

            <View className="mx-auto rounded-lg bg-[#2d2d2d] px-3  pb-2">
                <View className="flex-row self-center">
                    <Text className="mt-4 self-center text-2xl font-bold  text-white">
                        {user.name}
                    </Text>
                </View>
                <Text className="mt-4 self-center text-xl font-bold  text-white">
                    Information
                </Text>

                <Text className="mt-4 self-center text-lg font-bold text-white">
                    <Text className="self-center text-[#9e9e9e]">Email :</Text>
                    {user.email}
                </Text>
                <Text className="mt-4 self-center text-lg  font-bold text-white">
                    <Text className="text-[#9e9e9e]"> Join at :</Text>
                    {moment(user.created_at).format("HH:mm:ss")}
                </Text>
            </View>
            <View className=" mx-10 ">
                <TouchableOpacity
                    className="mt-6 h-12 w-60 justify-center self-center rounded-lg bg-[#006fff] shadow-lg"
                    onPress={handelLogOut}
                >
                    <Text className=" self-center text-xl text-white">
                        LogOut
                    </Text>
                </TouchableOpacity>
            </View>
            <View className="absolute -bottom-0 h-14 w-full self-center rounded-2xl bg-white p-3 ">
                <View className="flex-row items-center  justify-center justify-items-center  space-x-10 align-middle">
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Home_Screen")}
                    >
                        <AntDesign name="home" size={24} color="black" />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("UserTasksList")}
                    >
                        <Entypo name="list" size={24} color="black" />
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("Add")}
                    >
                        <View className=" flex h-10 w-10 items-center justify-center rounded-full bg-[#006fff] ">
                            <AntDesign
                                name="pluscircleo"
                                size={28}
                                color="white"
                            />
                        </View>
                    </TouchableOpacity>

                    <TouchableOpacity
                        onPress={() => navigation.navigate("ProjSites")}
                    >
                        <Ionicons
                            name="chatbox-outline"
                            size={24}
                            color="black"
                        />
                    </TouchableOpacity>
                    <TouchableOpacity
                        onPress={() => navigation.navigate("Profile")}
                    >
                        <AntDesign name="user" size={26} color="black" />
                    </TouchableOpacity>
                </View>
            </View>
        </View>
    );
}
