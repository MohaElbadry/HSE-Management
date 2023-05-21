import { Image, Text, View, TouchableOpacity, TextInput } from "react-native";
import { Picker } from "@react-native-picker/picker";
import { useState, useEffect } from "react";
import { AntDesign } from "@expo/vector-icons";
import * as SecureStore from "expo-secure-store";
import axios from "axios";
import { API_BASE_URL } from "../IP.js";

export default function AddRisk({ navigation }) {
    const [lib, setLib] = useState("");
    const [description, setDescription] = useState("");
    const [projects, setProjects] = useState([]);
    const [selectedProjectId, setSelectedProjectId] = useState(-1);
    /**
     * This function fetches projects from an API using a token for authorization and sets the projects in
     * state.
     */

    useEffect(() => {
        fetchData();
    }, []);

    const fetchData = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");

            const projects = await getProjects(token);
            setProjects(projects);
        } catch (error) {
            console.log("Error fetching projects:", error);
        }
    };

    const getProjects = async (token) => {
        try {
            const response = await axios.get(`${API_BASE_URL}/api/projets`, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });
            const projects = response.data.projets; // Extract the array of projects
            return projects;
        } catch (error) {
            console.log("Error fetching projects:", error);
            return [];
        }
    };

    /**
     * The function sets the selected project ID to the provided project ID.
     * @param projectId - The parameter `projectId` is a variable that represents the ID of a project.
     * The function `handleProjectChange` takes this parameter as input and sets the
     * `selectedProjectId` state variable to the value of `projectId`.
     */
    const handleProjectChange = (projectId) => {
        setSelectedProjectId(projectId);
    };

    /**
     * This function adds a new risk to a project using an API call with authorization.
     */
    const handelAddRisk = async () => {
        try {
            const token = await SecureStore.getItemAsync("token");
            const response = await axios.post(
                `${API_BASE_URL}/api/risks`,
                {
                    projet_id: selectedProjectId,
                    lib: lib,
                    description: description,
                },
                {
                    headers: {
                        Authorization: `Bearer ${token}`,
                    },
                }
            );
            //wait tel they add a Task than return to the page ADD
            await navigation.navigate("Add");
        } catch (error) {
            console.error("Risk creation failed:", error);
        }
    };

    return (
        <View
            className="flex-1  "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View className=" flex  w-full flex-row justify-between rounded-b-3xl bg-[#1B2223] px-4 pb-8 pt-16 drop-shadow-xl">
                <AntDesign
                    name="arrowleft"
                    size={24}
                    color="white"
                    onPress={() => navigation.goBack()}
                />
                <Text className="text-start text-xl font-extrabold text-white"></Text>
                <Text className="text-xl font-extrabold  text-[#4DCFC0]">
                    {"  "}
                </Text>
            </View>

            <View className="mt-12  w-full flex-col">
                <Text className="text-start text-xl  font-bold text-[#ae8654]">
                    ADD a Risk
                </Text>
                <View className="w-full flex-col   ">
                    <Text className="col-start-1 mx-7 mt-3 w-fit">Lib</Text>
                    <TextInput
                        className="border-1 mx-7 h-10 w-80 rounded-md  border-gray-400 bg-white p-2 shadow-sm "
                        placeholder={"ib"}
                        onChangeText={(text) => setLib(text)}
                    />
                </View>
                <View className="w-full flex-col   ">
                    <Text className="col-start-1 mx-7 mt-4 w-fit">
                        description
                    </Text>
                    <TextInput
                        className="border-1 mx-7 h-10 w-80 rounded-md  border-gray-400 bg-white p-2 shadow-sm "
                        placeholder={"description"}
                        onChangeText={(text) => setDescription(text)}
                    />
                </View>
                <View className="w-full flex-col   ">
                    <Text className="col-start-1 mx-7 mt-4 w-fit">
                        Projet 
                    </Text>
                    <Picker
                        style={{
                            borderWidth: 1,
                            marginHorizontal: 7,
                            height: 40,
                            width: 80,
                            borderRadius: 10,
                            borderColor: "gray",
                            backgroundColor: "white",
                            paddingHorizontal: 8,
                            shadowColor: "black",
                            shadowOffset: { width: 0, height: 2 },
                            shadowOpacity: 0.2,
                            shadowRadius: 2,
                            elevation: 2,
                        }}
                        pla
                        selectedValue={selectedProjectId}
                        onValueChange={handleProjectChange}
                    >
                        <Picker.Item label="Select a project" value="" />
                        {projects &&
                            projects.map((project) => (
                                <Picker.Item
                                    key={project.id}
                                    label={project.name}
                                    value={project.id}
                                />
                            ))}
                    </Picker>
                </View>
            </View>
            <View className=" mx-10 mt-20">
                <TouchableOpacity
                    className="mt-3 h-12 w-60 justify-center self-center rounded-lg bg-[#8D8CF5] shadow-lg"
                    onPress={handelAddRisk}
                >
                    <Text className=" self-center text-xl text-white">ADD</Text>
                </TouchableOpacity>
            </View>
        </View>
    );
}
